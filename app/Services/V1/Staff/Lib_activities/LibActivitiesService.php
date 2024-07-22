<?php

namespace App\Services\V1\Staff\Lib_activities;

use App\Exceptions\CredentialsInvalidException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use App\Models\Lib_activities;

class LibActivitiesService
{
    /**
     * @param $params
     * @return array
     * @throws CredentialsInvalidException
     */

    public function execute(){
        return Lib_activities::orderBy('created_at', 'desc')->get(); 
    }

    public function executeId($id){
        return Lib_activities::where('id', $id)->get();
    }

    public function executePost($params)
    {
        $user = Auth::User();


        Lib_activities::create([
            'name' => $params['name'],
            'description' => $params['description'],
            'created_by' => $user->id
        ]);
    }

    public function executePut($id, $params){
        $lib_activities = Lib_activities::findOrFail($id);
        $lib_activities->update($params);
        $lib_activities->save();
        
    }
}
