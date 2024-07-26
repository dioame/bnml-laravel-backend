<?php

namespace App\Http\Resources\Staff\Directory;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DirectoryResource extends JsonResource
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
            'file_id' => $this->file_id,
            'name' => $this->name,
            'description' => $this->description,
            'file_name' => $this->file_name,
            'path' => $this->path,
            'created_at' => $this->created_at->toDateTimeString(),
            'updated_at' => $this->updated_at->toDateTimeString()
        ];
    }
}