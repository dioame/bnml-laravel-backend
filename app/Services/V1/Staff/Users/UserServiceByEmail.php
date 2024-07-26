<?php
namespace App\Services\V1\Staff\Users;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

class UserServiceByEmail
{
    /**
     * @param $params
     * @return User|null
     */
    public function execute($email): ?User
    {
        return User::where(['email'=>$email])->first();
    }
}
