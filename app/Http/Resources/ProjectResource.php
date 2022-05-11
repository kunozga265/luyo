<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'slug'              =>  $this->slug,
            'title'             =>  $this->title,
            'client'            =>  $this->client,
            'location'          =>  $this->location,
            'cover_photo'       =>  $this->cover_photo,
            'body'              =>  $this->body,
            'completed_date'    =>  date('jS F, Y',$this->completed_date),
        ];
    }
}
