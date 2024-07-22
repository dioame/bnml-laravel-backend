<?php

namespace App\Http\Controllers\Api\V1\Staff\Installation;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Installation;
use App\Http\Requests\Staff\Installation\InstallationRequest;
use App\Services\V1\Staff\Installation\InstallationService;
use App\Http\Resources\Staff\Installation\InstallationCollection;
use App\Http\Resources\Staff\Installation\InstallationPointsCollection;


class InstallationController extends Controller
{
    public function index(InstallationService $service){
        $result = $service->execute();
        return new InstallationCollection($result);
    }

    public function store(InstallationRequest $request, InstallationService $service){   
        $result = $service->executePost($request->all());

        return response()->json([
            'status' => __('messages.success'),
            'description' => __('messages.201_created'),
        ]);
    }

    public function update($id,InstallationRequest $request, InstallationService $service){
        
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
        $installation = Installation::find($id);
        if($installation){
            $installation->delete();
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

    public function show($id, InstallationService $service){
        $result = $service->executeId($id);

        return new InstallationCollection($result);
    }

    public function points(InstallationService $service){
        $result = $service->executePoints();

        return new InstallationPointsCollection($result);
    }

   
}
