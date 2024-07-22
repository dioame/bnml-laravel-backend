<?php

namespace App\Http\Controllers\Api\V1\Staff\Lib_directory;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Lib_directory;
use App\Http\Requests\Staff\Lib_directory\LibDirectoryRequest;
use App\Services\V1\Staff\Lib_directory\LibDirectoryService;
use App\Http\Resources\Staff\Lib_directory\LibDirectoryCollection;
use App\Services\V1\Staff\Lib_directory\LibDirectoryTermService;
use App\Http\Resources\Staff\Lib_directory\LibDirectoryTermCollection;


class LibDirectoryController extends Controller
{
    public function index(LibDirectoryService $service){
        $result = $service->execute();

        return new LibDirectoryCollection($result);
    }

    public function store(LibDirectoryRequest $request, LibDirectoryService $service){ 
        $result = $service->executePost($request->all());

        return response()->json([
            'status' => __('messages.success'),
            'description' => __('messages.201_created'),
        ]);
    }

    public function update($id,LibDirectoryRequest $request, LibDirectoryService $service){

        $result = $service->executePut($id,$request->all());

        return response()->json([
            'status' => __('messages.success'),
            'description' => __('messages.200_ok'),
        ]);

    }
    
    public function destroy($id){
        $lib_acivities = Lib_directory::find($id);
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

    public function show($id, LibDirectoryService $service){
        $result = $service->executeId($id);
        return new LibDirectoryCollection($result);
    }

    public function getDirectoryByTerm(LibDirectoryTermService $service,Request $request){
        $result = $service->execute($request->term);
        return new LibDirectoryTermCollection($result);
    }

}
