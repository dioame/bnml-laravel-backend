<?php

namespace App\Services\V1\Staff\Installation;

use App\Exceptions\CredentialsInvalidException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use App\Models\Installation;

class InstallationService
{
    /**
     * @param $params
     * @return array
     * @throws CredentialsInvalidException
     */

    public function execute(){
        return Installation::all(); 
    }

    public function executeId($id){
        return Installation::where('id', $id)->get();
    }

    public function executePost($params)
    {
        $user = Auth::User();


        Installation::create([
            'user_id' => $params['user_id'],
            'installation_id' => $params['lib_installation_id'],
        ]);
    }

    public function executePut($id, $params){
        $installation = Installation::findOrFail($id);
        $installation->user_id = $params['user_id'];
        $installation->installation_id = $params['lib_installation_id'];
        $installation->update();

        return $installation;
        
    }
}
