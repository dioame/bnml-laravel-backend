<?php

namespace App\Http\Controllers\Api\V1\Staff\SummaryPoints;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\V1\Staff\SummaryPoints\SummaryPointsService;
use App\http\Resources\Staff\SummaryPoints\SummaryPointsCollection;



class SummaryPointsController extends Controller
{
    public function index(SummaryPointsService $service){
        $result = $service->execute();

        return new SummaryPointsCollection($result);
    }
   
}
