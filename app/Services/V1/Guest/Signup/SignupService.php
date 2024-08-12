<?php

namespace App\Services\V1\Guest\Signup;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
class SignupService {      
    /**
     * Crate atmosphere
     * @param array $param
     * @return object
     */
    public function execute($params)
    {   


        $user = User::create([
            'email' => $params['email'],
            'password' => bcrypt($params['password']),
            "firstname" => $params['firstname'],
            "middlename" => $params['middlename'],
            "lastname" => $params['lastname'],
            "extensionname" => $params['extensionname'],
            "birth_date" => $params['birth_date'],
            "address" => $params['address'],
            "gender" => $params['gender'],
            "mobile" => $params['mobile'],
            "role" => $params['role'],
            "member_type_id" => 5,
         
        ]);

        $user->assignRole('guest');

        $latests = $user->tokens()->latest()->take(9)->pluck('id');
        $user->tokens()->whereNotIn('id', $latests)->delete();

        $device = request()->device_name;
        if (empty($device)) {
            $device = request()->ip();
        }

        $token = $user->createToken($device);
        $token->accessToken->save();

        // Create token
        return [$token->plainTextToken, $user];
        // return $token->plainTextToken;
    }

    // public function execute_photo($param){
    //     $user = Auth::user();

    //     if($user){
    //         $user->id_photo = $param['photo'];
    //         $user->save();
    //     }

    //     return $user;
    // }
}