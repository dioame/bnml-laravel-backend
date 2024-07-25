<?php

namespace App\Http\Resources\Staff\SummaryPoints;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SummaryPointsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray(Request $request): array
    {
        
        return [
            'id' => $this->id,
            'name' => $this->firstname .' '.(($this->middlename) ? $this->middlename[0] : '').' '.$this->lastname,
            'stated_meeting_points' => $this->statedMeetingPoints,
            'special_meeting_points' => $this->specialMeetingPoints,
            'flag+tribute_points' => $this->flagTributePoints,
            'installation_points' => $this->installationPoints,
            'total_points' => $this->totalPoints,
        ];
    }
}
