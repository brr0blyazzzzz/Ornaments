<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Motive;
use App\Models\NationType;

class MotiveNationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $nation_id=NationType::Find($this->nation_id);
        $motive_id=Motive::Find($this->motive_id);
         return [
            'motive_id'=>$motive_id,
            'nation_id'=>$nation_id
        ];
    }
}
