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
            'id' => $this['user_id'],
            'user_id' => $this['user_id'],
            'name' => $this['user_name'],
            'installation' => $this->resource['installation'],
            'points' => $this->resource['points'],
            'rank' => $this->resource['rank'],
        ];
    }
}

