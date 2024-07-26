<?php

namespace App\Http\Controllers\Api\V1\Guest\Installation;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\V1\Guest\Installation\InstallationService;
use App\Http\Resources\Guest\Installation\InstallationPointsResource;


class InstallationController extends Controller
{
    public function points(InstallationService $service){
    
        $result = $service->executePoints();
        
        return response()->json([
            'status' => __('messages.success'),
            'description' => __('messages.200_ok'),
            'data' => new InstallationPointsResource($result)
        ]);
    }
   
}
