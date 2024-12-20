<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MotiveType;
use App\Http\Resources\MotiveTypeResource;
use App\Http\Requests\StoreMotiveType;
use App\Models\Motive;
use App\Models\Type;

class MotiveTypeController extends Controller
{

    /**
     * Функция добавляет тип мотива в базу
     * @param StoreMotiveType $request
     * @return MotiveTypeResource
     */
    public function addMotiveType(StoreMotiveType $request): MotiveTypeResource
    {
        $user = $request->user();
        $request->merge(['creator_id' => $user->id]);
        if (!Motive::where('id', $request->input('motive_id'))->exists()) {
            abort(404, 'Motive not found');
        }
        if (!Type::where('id', $request->input('type_id'))->exists()) {
            abort(404, 'Type not found');
        }
        $motiveType = MotiveType::create($request->all());

        return new MotiveTypeResource($motiveType);
    }

    /**
     * Функция удаляет тип мотива
     * @param Request $request 
     * @param int $motive_id
     * @param int $type_id
     */
    public function deleteMotiveType(Request $request): void
    {
        $motiveId = $request->input('motive_id');
        $typeId = $request->input('type_id');
        $motiveType = MotiveType::where('motive_id', $motiveId)->where('type_id', $typeId)->first();
        if (!$motiveType) {
            abort(404, 'Motive Type not found');
        }
        $this->authorize('delete', $motiveType);
        $motiveType->delete(); 
    }
}
