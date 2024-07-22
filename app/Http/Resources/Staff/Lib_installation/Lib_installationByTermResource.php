<?php

namespace App\Http\Resources\Staff\Lib_installation;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Lib_installationByTermResource extends JsonResource
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
            'name' => $this->name.' - '.$this->description,
            'created_at' => $this->created_at->toDateTimeString() ?? '',
            'updated_at' => $this->updated_at->toDateTimeString() ?? ''
        ];
    }
}