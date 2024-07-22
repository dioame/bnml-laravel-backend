<?php
namespace App\Services\V1\Staff\Users;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

class UserServiceBy
{
    /**
     * @param $params
     * @return User|null
     */
    public function execute($id): ?User
    {
        return User::find($id);
    }
}
