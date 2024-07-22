<?php

namespace App\Services\V1\Staff\Users;

use App\Exceptions\CredentialsInvalidException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use App\Models\User;

class UserLoginEmailService
{
    /**
     * @param $params
     * @return array
     * @throws CredentialsInvalidException
     */
    public function execute($params)
    {
        $user = User::where('email',$params['email'])->first();
        
        if (!$user) {
            throw new CredentialsInvalidException();
        }

        // Check if you want to perform any additional checks here

        $device = Request::input('device_name', Request::ip());

        $latest = $user->tokens()->latest()->take(9)->pluck('id');
        $user->tokens()->whereNotIn('id', $latest->all())->delete();

        // Create token
        $token = $user->createToken($device);

        return [$token->plainTextToken, $user];
    }
}
