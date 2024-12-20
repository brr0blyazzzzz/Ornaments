<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Motive;
use App\Models\SymbolType;

class MotiveSymbolResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $symbol_id=SymbolType::Find($this->symbol_id);
        $motive_id=Motive::Find($this->motive_id);
         return [
            'motive_id'=>$motive_id,
            'symbol_id'=>$symbol_id
        ];
    }
}
