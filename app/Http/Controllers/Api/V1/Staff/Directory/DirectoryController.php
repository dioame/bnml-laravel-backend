<?php

namespace App\Http\Controllers\Api\V1\Staff\Directory;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Directory;
use App\Http\Requests\Staff\Directory\DirectoryRequest;
use App\Services\V1\Staff\Directory\DirectoryService;
use App\Http\Resources\Staff\Directory\DirectoryCollection;


class DirectoryController extends Controller
{
    public function index(DirectoryService $service){
        $result = $service->execute();

        return new DirectoryCollection($result);
    }

    public function store(DirectoryRequest $request, DirectoryService $service){ 

        $result = $service->executePost($request->all());

        return response()->json([
            'status' => __('messages.success'),
            'description' => __('messages.201_created'),
        ]);
    }

    public function update($id,DirectoryRequest $request, DirectoryService $service){

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
        $lib_acivities = Directory::find($id);
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

    public function show($id, DirectoryService $service){
        $result = $service->executeId($id);

        return new DirectoryCollection($result);
    }

   
}
