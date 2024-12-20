<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Motive;
use App\Models\InterlacingType;

class MotiveInterlacingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $interlacing_id=InterlacingType::Find($this->interlacing_id);
        $motive_id=Motive::Find($this->motive_id);
        return [
            'motive_id'=>$motive_id,
            'interlacing_id'=>$interlacing_id
        ];
    }
}
