<?php

namespace App\Http\Resources\Staff\Lib_installation;

use Illuminate\Http\Resources\Json\ResourceCollection;

class Lib_installationCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public $collects = \App\Http\Resources\Staff\Lib_installation\Lib_installationResource::class;

    public function toArray($request): array
    {
        return [
            'status' => __('messages.success'),
            'description' => __('messages.200_ok'),
            'data' => $this->collection,
        ];
    }
}
