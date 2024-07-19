<?php

namespace App\Services\V1\Staff\Lib_installation;

use App\Exceptions\CredentialsInvalidException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use App\Models\Lib_installation;

class Lib_installationService
{
    /**
     * @param $params
     * @return array
     * @throws CredentialsInvalidException
     */

    public function execute(){
        return Lib_installation::all(); 
    }

    public function executeId($id){
        return Lib_installation::where('id', $id)->get();
    }

    public function executePost($params)
    {
        $user = Auth::User();


        Lib_installation::create([
            'name' => $params['name'],
            'description' => $params['description'],
            'created_by' => $user->id
        ]);
    }

    public function executePut($id, $params){
        $lib_activities = Lib_installation::findOrFail($id);
        $lib_activities->update($params);
        $lib_activities->save();

        return $lib_activities;
        
    }
}
