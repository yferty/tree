<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TreeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        if ($this->parent()->count() > 0) {
            return [
                'id' => $this->id,
                'title' => $this->title,
                'parent' => $this->parent,
            ];
        } else {
            return [
                'id' => $this->id,
                'title' => $this->title,
            ];
        }
    }
}
