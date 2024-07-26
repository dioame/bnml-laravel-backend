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

    public function execute($lib_activity_id){
        if ($lib_activity_id) {
            return Activities::where('lib_activity_id', $lib_activity_id)->orderBy('created_at', 'desc')->get();
        } else {
            return Activities::orderBy('created_at', 'desc')->get();
        }

    }

    public function executeId($id){
        return Activities::where('id', $id)->get();
    }

    public function executePost($params)
    {

        Activities::create([
            'lib_activity_id' => $params['lib_activity_id'],
            'name' => $params['name'],
            'description' => $params['description'],
            'area' => $params['area'],
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

    public function executeTerm($lib_activity_id,$term)
    {
        if(!$term){
            return Activities::all();
        }else{
            return Activities::
            whereRaw("CONCAT(name, '-',description) LIKE ?", ["%{$term}%"])
            ->where('lib_activity_id',$lib_activity_id)
            ->get();
        }
         
    }
}
