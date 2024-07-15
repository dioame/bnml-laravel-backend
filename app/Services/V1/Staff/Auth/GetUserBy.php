<?php
namespace App\Services\V1\Staff\Auth;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

class GetUserBy
{
    /**
     * @param $params
     * @return User|null
     */
    public function execute($params, $includesTrashed = false): ?User
    {
        return User::when($includesTrashed, function(Builder $query) {
                return $query->withTrashed();
            })->where('email',$params['email'])->first();
    }
}
