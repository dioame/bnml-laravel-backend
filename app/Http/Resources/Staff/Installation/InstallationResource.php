<?php

namespace App\Http\Resources\Staff\Installation;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InstallationResource extends JsonResource
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
            'user_id' => $this->user_id,
            'installation_id' => $this->installation_id,
            'created_at' => $this->created_at->toDateTimeString(),
            'updated_at' => $this->updated_at->toDateTimeString()
        ];
    }
}