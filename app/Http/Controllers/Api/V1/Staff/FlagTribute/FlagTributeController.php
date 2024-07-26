<?php

namespace App\Http\Controllers\Api\V1\Staff\FlagTribute;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\FlagTribute;
use App\Http\Requests\Staff\FlagTribute\FlagTributeRequest;
use App\Http\Requests\Staff\FlagTribute\PutFlagTributeRequest;
use App\Services\V1\Staff\FlagTribute\FlagTributeService;
use App\Http\Resources\Staff\FlagTribute\FlagTributeCollection;
use App\Http\Resources\Staff\FlagTribute\FlagTributeCollectionPoints;

class FlagTributeController extends Controller
{
    public function index(FlagTributeService $service){
        $result = $service->execute();

        return new FlagTributeCollection($result);
    }

    public function store(FlagTributeRequest $request, FlagTributeService $service){
        $result = $service->executePost($request->all());

        return response()->json([
            'status' => __('messages.success'),
            'description' => __('messages.201_created'),
        ]);
    }

    public function update($id,PutFlagTributeRequest $request, FlagTributeService $service){

        $result = $service->executePut($id,$request->all());

        return response()->json([
            'status' => __('messages.success'),
            'description' => __('messages.200_ok'),
        ]);

    }
    
    public function destroy($id){
        $FlagTribute = FlagTribute::find($id);
        if($FlagTribute){
            $FlagTribute->delete();
            return response()->json([
                'status' => __('messages.success'),
                'description' => __('messages.200_ok'),
            ]);
        }else{
            return response()->json([
                'status' => __('messages.error'),
                'description' => __('messages.404_not_found'),
            ], 404);
        }
    }

    public function show($id, FlagTributeService $service){
        $result = $service->executeId($id);

        return new FlagTributeCollection($result);
    }

    public function pointsRank(FlagTributeService $service){
        $result = $service->getRank();

        return new FlagTributeCollectionPoints($result);
    }

   
}
