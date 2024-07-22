<?php

namespace App\Http\Controllers\Api\V1\Staff\Meetings;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\V1\Staff\Meetings\MeetingsService;
use App\Http\Resources\Staff\Meetings\StatedMeetingCollection;
use App\Http\Resources\Staff\Meetings\SpecialMeetingCollection;



class MeetingsController extends Controller
{
    public function getStatedMeeting(MeetingsService $service){
        $result = $service->executedStatedMeetingPoints();

        return new StatedMeetingCollection($result);
    }

    public function getSpecialMeeting(MeetingsService $service){
        $result = $service->executedSpecialMeetingPoints();
        
        return new SpecialMeetingCollection($result);
    }
   
}
