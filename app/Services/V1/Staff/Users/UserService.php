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
    public function execute($role = null)
    {
        if($role == 'member'){
            $result = User::where('role', $role)->orderBy('created_at', 'desc')->get();
            return $result;
        }else if($role == 'officer'){
            $result = User::where('role', $role)->orderBy('created_at', 'desc')->get();
            return $result;
        }else if($role == 'petitioner'){
            $result = User::where('role', $role)->orderBy('created_at', 'desc')->get();
            return $result;
        }


        $result = User::orderBy('created_at', 'desc')->get();
        return $result;
    }

    public function executeUpdate($params){
        $user = Auth::User();

        $user->update($params);
    }
}
