<?php

namespace App\Services\V1\Staff\Attendance;

use App\Exceptions\CredentialsInvalidException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use App\Models\Attendance;

class AttendanceService
{
    /**
     * @param $params
     * @return array
     * @throws CredentialsInvalidException
     */

    public function execute(){
        return Attendance::all(); 
    }

    public function executeId($id){
        return Attendance::where('id', $id)->get();
    }

    public function executePost($params)
    {
        $user = Auth::User();

        Attendance::create([
            'user_id' => $params['user_id'],
            'activities_id' => $params['activity_id'],
        ]);
    }

    public function executePut($id, $params){
        $installation = Attendance::findOrFail($id);
        $installation->user_id = $params['user_id'];
        $installation->activities_id = $params['activity_id'];
        $installation->update();

        return $installation;
        
    }
}
