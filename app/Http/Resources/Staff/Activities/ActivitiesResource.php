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
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
        ];
    }
}