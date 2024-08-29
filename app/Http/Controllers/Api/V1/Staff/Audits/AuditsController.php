<?php

namespace App\Http\Controllers\Api\V1\Staff\Audits;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\V1\Staff\Audits\AuditsService;
use App\Http\Resources\Staff\Audits\AuditsCollection;



class AuditsController extends Controller
{
    public function index(Request $request, AuditsService $service){
        $result = $service->execute($request->all());
        
        return new AuditsCollection($result);
    }
   
}



