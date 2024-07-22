<?php
namespace App\Services\V1\Staff\Users;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

class UserServiceByTerm
{
    /**
     * @param $params
     * @return User|null
     */
    public function execute($term)
    {
        if(!$term){
            return User::all();
        }else{
            return User::
            whereRaw("CONCAT(firstname, ' ', middlename, ' ', lastname) LIKE ?", ["%{$term}%"])
            ->get();
        }
         
    }
}
