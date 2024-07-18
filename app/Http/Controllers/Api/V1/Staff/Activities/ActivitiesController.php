<?php

namespace App\Http\Controllers\Api\V1\Staff\Activities;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Activities;
use App\Http\Requests\Staff\Activities\ActivitiesRequest;
use App\Services\V1\Staff\Activities\ActivitiesService;
use App\Http\Resources\Staff\Activities\ActivitiesCollection;


class ActivitiesController extends Controller
{
    public function index(ActivitiesService $service){
        $result = $service->execute();

        return new ActivitiesCollection($result);
    }

    public function store(ActivitiesRequest $request, ActivitiesService $service){

        $result = $service->executePost($request->all());

        return response()->json([
            'status' => __('messages.success'),
            'description' => __('messages.201_created'),
        ]);
    }

    public function update($id,ActivitiesRequest $request, ActivitiesService $service){

        $result = $service->executePut($id,$request->all());

        if(is_null($result)){
            return response()->json([
                'status' => __('messages.error'),
                'description' => __('messages.404_not_found'),
            ], 404);
        }

        return response()->json([
            'status' => __('messages.success'),
            'description' => __('messages.200_ok'),
        ]);

    }
    
    public function destroy($id){
        $lib_acivities = Activities::find($id);
        if($lib_acivities){
            $lib_acivities->delete();
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

    public function show($id, ActivitiesService $service){
        $result = $service->executeId($id);

        return new ActivitiesCollection($result);
    }

   
}
