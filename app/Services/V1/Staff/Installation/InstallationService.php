<?php

namespace App\Services\V1\Staff\Installation;

use App\Exceptions\CredentialsInvalidException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use App\Models\Installation;
use App\Models\User;

class InstallationService
{
    /**
     * @param $params
     * @return array
     * @throws CredentialsInvalidException
     */

    public function execute(){
        return Installation::orderBy('created_at', 'desc')->get(); 
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

    public function executePoints()
{
    $installations = Installation::with('user')->get();

    $groupedInstallations = $installations->groupBy('user_id');

    $responseData = $groupedInstallations->map(function ($installations, $userId) {
        $user = User::where('id', $userId)->first();

        // Handle the case when the user is not found
        if (!$user) {
            $user_name = ' ';
        } else {
            $user_name = $user->firstname.' '.$user->middlename.' '.$user->lastname;
        }

        return [
            'id' => $userId,
            'user_id' => $userId,
            'user_name' => $user_name,
            'installation' => $installations->map(function ($installation) {
                return [
                    'id' => $installation->id,
                    'user_id' => $installation->user_id,
                    'name' => $installation->libInstallation->name,
                    'installation_id' => $installation->installation_id,
                    'created_at' => $installation->created_at,
                    'updated_at' => $installation->updated_at,
                ];
            }),
            'points' => $installations->count() * 2,
        ];
    })->values();

    // Sort users by points in descending order
    $sortedUsers = $responseData->sortByDesc('points')->values();

    // Assign ranks
    $rankedUsersPoints = $sortedUsers->map(function ($user, $index) {
        return [
            'id' => $user['user_id'],
            'user_id' => $user['user_id'],
            'user_name' => $user['user_name'],
            'installation' => $user['installation'],
            'points' => $user['points'],
            'rank' => $index + 1,
        ];
    });

    return $rankedUsersPoints;
}
    


}
