<?php

namespace App\Services\V1\Guest\Installation;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

use App\Models\Installation;
class InstallationService {      
    /**
     * Crate atmosphere
     * @param array $param
     * @return object
     */
    public function executePoints()
    {   
        $user = Auth::User();

        $userInstallations = Installation::where('user_id', $user->id)->get();

        
        $response = [
            'installation' => $userInstallations->map(function($installation) {
                return [
                    'id' => $installation->id,
                    'user' => $installation->user_id,
                    'installation_id' => $installation->installation_id,
                    'created_at' => $installation->created_at,
                    'updated_at' => $installation->updated_at,
                ];
            }),
            'points' => $userInstallations->count() * 2 // Calculate points
        ];

        
    


        return  $response;
    }
}