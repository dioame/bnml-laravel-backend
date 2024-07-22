<?php

namespace App\Http\Resources\Staff\Installation;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InstallationPointsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray(Request $request): array
    {
        return [
            'user_id' => $this['user_id'],
            'installation' => $this->resource['installation'],
            'points' => $this->resource['points'],
            'rank' => $this->resource['rank'],
        ];
    }
}

