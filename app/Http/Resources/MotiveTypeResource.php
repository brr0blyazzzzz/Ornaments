<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Motive;
use App\Models\Type;

class MotiveTypeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $type_id=Type::Find($this->type_id);
        $motive_id=Motive::Find($this->motive_id);
         return [
            'motive_id'=>$motive_id,
            'type_id'=>$type_id
        ];
    }
}
