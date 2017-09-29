<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Task extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
       // return parent::toArray($request);
       return [
           'name' => $this->name,
           'created' => $this->created_at->diffForHumans(),
       ];
    }

    public function with($request)
    {
        return [
            'version' => '1.0.0',
        ];
    }
}
