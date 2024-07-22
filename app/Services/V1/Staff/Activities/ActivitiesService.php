<?php

namespace App\Services\V1\Staff\Activities;

use App\Exceptions\CredentialsInvalidException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use App\Models\Activities;
use Illuminate\Support\Facades\Storage;


class ActivitiesService
{
    /**
     * @param $params
     * @return array
     * @throws CredentialsInvalidException
     */

    public function execute(){
        return Activities::orderBy('created_at', 'desc')->get(); 
    }

    public function executeId($id){
        return Activities::where('id', $id)->get();
    }

    public function executePost($params)
    {

        Activities::create([
            'lib_activity_id' => $params['lib_activity_id'],
            'start_date' => $params['start_date'],
            'end_date' => $params['end_date']
        ]);
    }



    public function executePut($id, $params){

        $activities = Activities::where('id',$id)->first();    

        if(!is_null($activities)){
            $activities->update($params);
            $activities->save();
            
        }
        return $activities;        
    }
}
