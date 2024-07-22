<?php
namespace App\Services\V1\Staff\Lib_directory;

use App\Models\Lib_directory;
use Illuminate\Database\Eloquent\Builder;

class LibDirectoryTermService
{
    /**
     * @param $params
     * @return User|null
     */
    public function execute($term)
    {
        if(!$term){
            return Lib_directory::all();
        }else{
            return Lib_directory::
            whereRaw("CONCAT(name, '-',description) LIKE ?", ["%{$term}%"])
            ->get();
        }
         
    }
}
