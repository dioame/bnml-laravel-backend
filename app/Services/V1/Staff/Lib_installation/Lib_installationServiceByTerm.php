<?php
namespace App\Services\V1\Staff\Lib_installation;

use App\Models\Lib_installation;
use Illuminate\Database\Eloquent\Builder;

class Lib_installationServiceByTerm
{
    /**
     * @param $params
     * @return User|null
     */
    public function execute($term)
    {
        if(!$term){
            return Lib_installation::all();
        }else{
            return Lib_installation::
            whereRaw("CONCAT(name, '-',description) LIKE ?", ["%{$term}%"])
            ->get();
        }
         
    }
}
