<?php

namespace App\Http\Resources\Staff\Users;

use Illuminate\Http\Resources\Json\ResourceCollection;

class UserCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public $collects = \App\Http\Resources\Staff\Users\UserResource::class;

    public function toArray($request): array
    {
        return [
            'status' => __('messages.success'),
            'description' => __('messages.200_ok'),
            'data' => $this->collection,
        ];
    }
}
