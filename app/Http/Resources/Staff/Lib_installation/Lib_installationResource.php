<?php

namespace App\Http\Resources\Staff\Lib_installation;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Lib_installationResource extends JsonResource
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
            'name' => $this->name,
            'description' => $this->description
        ];
    }
}