<?php

namespace App\Http\Resources\Staff\Activities;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ActivitiesResource extends JsonResource
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
            'lib_activity_id' => $this->lib_activity_id,
            'name' => $this->name,
            'description' => $this->description,
            'area' => $this->area,
            'start_date' => date("F d, Y g:i a",strtotime($this->start_date)),
            'end_date' => date("F d, Y g:i a",strtotime($this->end_date)),
            'count' => $this->attendance->count()
            // 'created_at' => $this->created_at->toDateTimeString(),
            // 'updated_at' => $this->updated_at->toDateTimeString()
        ];
    }
}