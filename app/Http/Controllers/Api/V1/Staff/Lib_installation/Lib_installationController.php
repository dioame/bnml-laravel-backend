<?php

namespace App\Http\Controllers\Api\V1\Staff\Lib_installation;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Lib_installation;
use App\Http\Requests\Staff\Lib_installation\Lib_installationRequest;
use App\Services\V1\Staff\Lib_installation\Lib_installationService;
use App\Http\Resources\Staff\Lib_installation\Lib_installationCollection;


class Lib_installationController extends Controller
{
    public function index(Lib_installationService $service){
        $result = $service->execute();

        return new Lib_installationCollection($result);
    }

    public function store(Lib_installationRequest $request, Lib_installationService $service){  
        $result = $service->executePost($request->all());

        return response()->json([
            'status' => __('messages.success'),
            'description' => __('messages.201_created'),
        ]);
    }

    public function update($id,Lib_installationRequest $request, Lib_installationService $service){
        
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
        $installation = Lib_installation::find($id);
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

    public function show($id, Lib_installationService $service){
        $result = $service->executeId($id);

        return new Lib_installationCollection($result);
    }

   
}
