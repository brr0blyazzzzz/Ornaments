<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MotiveResource extends JsonResource
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
            'motive_title'=>$this->motive_title,
            'motive_source'=>$this->motive_source,
            'motive_date'=>$this->motive_date,
            'motive_notes'=>$this->motive_notes,
            'motive_img'=>$this->motive_img
        ];
    }
}
