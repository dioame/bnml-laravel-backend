<?php

namespace App\Http\Resources\Staff\Meetings;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StatedMeetingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray(Request $request): array
    {
        
        return [
            'id' => $this->user_id,
            'user_id' => $this->user_id,
            'name' => $this->user->firstname .' '.(($this->user->middlename) ? $this->user->middlename[0] : '').' '.$this->user->lastname,
            'activities' => $this->activities,
            'points' => $this->points,
            'rank' => $this->rank
        ];
    }
}