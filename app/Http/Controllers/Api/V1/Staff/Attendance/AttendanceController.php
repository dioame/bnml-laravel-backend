<?php

namespace App\Http\Controllers\Api\V1\Staff\Attendance;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Attendance;
use App\Http\Requests\Staff\Attendance\AttendanceRequest;
use App\Services\V1\Staff\Attendance\AttendanceService;
use App\Http\Resources\Staff\Attendance\AttendanceCollection;


class AttendanceController extends Controller
{
    public function index(AttendanceService $service){
        $result = $service->execute();

        return new AttendanceCollection($result);
    }

    public function store(AttendanceRequest $request, AttendanceService $service){    

        $result = $service->executePost($request->all());

        return response()->json([
            'status' => __('messages.success'),
            'description' => __('messages.201_created'),
        ]);
    }

    public function update($id,AttendanceRequest $request, AttendanceService $service){
        
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
        $installation = Attendance::find($id);
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

    public function show($id, AttendanceService $service){
        $result = $service->executeId($id);

        return new AttendanceCollection($result);
    }

   
}
