<?php

namespace App\Services\V1\Staff\Lib_directory;

use App\Exceptions\CredentialsInvalidException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use App\Models\Lib_directory;

class LibDirectoryService
{
    /**
     * @param $params
     * @return array
     * @throws CredentialsInvalidException
     */

    public function execute(){
        return Lib_directory::all(); 
    }

    public function executeId($id){
        return Lib_directory::where('id', $id)->get();
    }

    public function executePost($params)
    {
        $user = Auth::User();


        Lib_directory::create([
            'name' => $params['name'],
            'description' => $params['description'],
            'created_by' => $user->id
        ]);
    }

    public function executePut($id, $params){
        $Lib_directory = Lib_directory::findOrFail($id);
        $Lib_directory->update($params);
        $Lib_directory->save();
        
    }
}
