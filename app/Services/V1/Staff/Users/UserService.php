<?php
namespace App\Services\V1\Staff\Users;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class UserService
{
    /**
     * @param $params
     * @return User|null
     */
    public function execute()
    {
        $result = User::all();
        return $result;
    }

    public function executeUpdate($params){
        $user = Auth::User();

        $user->update($params);
    }
}
