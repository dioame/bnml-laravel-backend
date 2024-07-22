<?php

namespace App\Services\V1\Staff\FlagTribute;

use App\Exceptions\CredentialsInvalidException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use App\Models\FlagTribute;
use App\Models\User;

class FlagTributeService
{
    /**
     * @param $params
     * @return array
     * @throws CredentialsInvalidException
     */

    public function execute(){
        $flatTribute = FlagTribute::orderBy('points', 'desc')->get(['*']);

        $userRank = $flatTribute->map(function($item, $key){
            $item->rank = $key + 1;
            return $item;
        });

        return $userRank;
    }

    public function executeId($id){
         $flatTribute = FlagTribute::orderBy('points', 'desc')->get(['*']);

        $userRank = $flatTribute->map(function($item, $key){
            $item->rank = $key + 1;
            return $item;
        });

        $rank = $userRank->where('user_id', $id);
        
        return $rank;
    }

    public function executePost($params)
    {

        $user_exist = FlagTribute::where('user_id', $params['user_id'])->first();

        if($user_exist){
            $user_exist->points += $params['points'];
            $user_exist->save();
        }else{
            FlagTribute::create([
                'user_id' => $params['user_id'],
                'points' => $params['points'],
            ]);
        }
    }

    public function executePut($id, $params){
        $FlagTribute = FlagTribute::where('user_id', $id)->first();
        $FlagTribute->points = $params['points'];
        $FlagTribute->save();

        return $FlagTribute;
        
    }

}
