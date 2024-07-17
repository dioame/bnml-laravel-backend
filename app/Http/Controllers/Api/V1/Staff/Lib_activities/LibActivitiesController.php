<?php

namespace App\Http\Controllers\Api\V1\Staff\Lib_activities;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Lib_activities;
use App\Http\Requests\Staff\Lib_activities\LibActivitiesRequest;
use App\Services\V1\Staff\Lib_activities\LibActivitiesService;
use App\Http\Resources\Staff\Lib_activities\LibActivitiesCollection;


class LibActivitiesController extends Controller
{
    public function index(LibActivitiesService $service){
        $result = $service->execute();

        return new LibActivitiesCollection($result);
    }

    public function store(LibActivitiesRequest $request, LibActivitiesService $service){
        $result = $service->executePost($request->all());

        return response()->json([
            'status' => __('messages.success'),
            'description' => __('messages.201_created'),
        ]);
    }

    public function update($id,LibActivitiesRequest $request, LibActivitiesService $service){

        $result = $service->executePut($id,$request->all());

        return response()->json([
            'status' => __('messages.success'),
            'description' => __('messages.200_ok'),
        ]);

    }
    
    public function destroy($id){
        $lib_acivities = Lib_activities::find($id);
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

    public function show($id, LibActivitiesService $service){
        $result = $service->executeId($id);

        return new LibActivitiesCollection($result);
    }

   
}
