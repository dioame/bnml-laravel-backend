<?php

namespace App\Services\V1\Staff\Meetings;

use App\Exceptions\CredentialsInvalidException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use App\Models\User;
use App\Models\Attendance;
use App\Models\Activities;
use Illuminate\Support\Facades\DB;

class MeetingsService
{
    /**
     * @param $params
     * @return array
     * @throws CredentialsInvalidException
     */

    public function executedStatedMeetingPoints(){
        $statedMeetingDatas = Attendance::join('activities', 'activities.id', '=', 'attendance.activities_id')
            ->select('attendance.user_id', DB::raw('count(*) * 5 as points'))
            ->where('activities.lib_activity_id', '=', 1)
            ->groupBy('attendance.user_id')
            ->get();

        foreach ($statedMeetingDatas as $statedMeetingData) {
            $activities = Activities::join('attendance', 'attendance.activities_id', '=', 'activities.id')
                ->where('attendance.user_id', $statedMeetingData->user_id)
                ->where('activities.lib_activity_id', '=', 1)
                ->select('activities.*', DB::raw('MONTHNAME(activities.start_date) as month'))
                ->get()
                ->mapWithKeys(function ($activity) {
                    $monthKey = strtolower(substr($activity->month, 0, 3));
                    return [$monthKey => $activity];
                });
            
    
            // Ensure all months are present
            $months = ['jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jul', 'aug', 'sep', 'oct', 'nov', 'dec'];
            $activities = collect($months)->mapWithKeys(function ($month) use ($activities) {
                // var_dump($activities->get($month, new \stdClass()));
                $result = $activities->get($month, null);
                if (is_object($result) && get_class($result) === 'stdClass' && count(get_object_vars($result)) === 0) {
                    $result = null;
                }

                return [$month => $result ];
            });
    
            $statedMeetingData->activities = $activities;
        }
        // Sort the collection by points in descending order
        $sortedData = $statedMeetingDatas->sortByDesc('points')->values();

        // Add rank to each user
        $rankedData = $sortedData->map(function ($item, $key) {
            $item->rank = $key + 1; // Rank starts from 1
            return $item;
        });

        return $rankedData;
    }

    public function executedSpecialMeetingPoints(){
        $specialMeetingDatas = Attendance::join('activities', 'activities.id', '=', 'attendance.activities_id')
            ->select('attendance.user_id', DB::raw('count(*) * 3 as points'))
            ->where('activities.lib_activity_id', '=', 2)
            ->groupBy('attendance.user_id')
            ->get();

            foreach ($specialMeetingDatas as $specialMeetingData) {
                $activities = Activities::join('attendance', 'attendance.activities_id', '=', 'activities.id')
                    ->where('attendance.user_id', $specialMeetingData->user_id)
                    ->where('activities.lib_activity_id', '=', 2)
                    ->select('activities.*', DB::raw('MONTHNAME(activities.start_date) as month'))
                    ->get()
                    ->mapWithKeys(function ($activity) {
                        $monthKey = strtolower(substr($activity->month, 0, 3));
                        return [$monthKey => $activity];
                    });
        
                // Ensure all months are present
                $months = ['jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jul', 'aug', 'sep', 'oct', 'nov', 'dec'];
                $activities = collect($months)->mapWithKeys(function ($month) use ($activities) {
                    $result = $activities->get($month, null);
                    if (is_object($result) && get_class($result) === 'stdClass' && count(get_object_vars($result)) === 0) {
                        $result = null;
                    }
    
                    return [$month => $result ];
                });
        
                $specialMeetingData->activities = $activities;
            }

        // Sort the collection by points in descending order
        $sortedData = $specialMeetingDatas->sortByDesc('points')->values();

        // Add rank to each user
        $rankedData = $sortedData->map(function ($item, $key) {
            $item->rank = $key + 1; // Rank starts from 1
            return $item;
        });

        return $rankedData;
    }

}
