<?php

namespace App\Http\Resources\Staff\Meetings;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SpecialMeetingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray(Request $request): array
    {
        
        return [
            'user_id' => $this->user_id,
            'activities' => $this->activities,
            'points' => $this->points,
            'rank' => $this->rank
        ];
    }
}