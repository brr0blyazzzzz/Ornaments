<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MotiveInterlacing;
use App\Http\Resources\MotiveInterlacingResource;
use App\Http\Requests\StoreMotiveInterlacing;
use App\Models\Motive;
use App\Models\InterlacingType;

class MotiveInterlacingController extends Controller
{

    /**
     * Функция добавляет мотив переплетения в базу
     * @param StoreMotiveInterlacing $request
     * @return MotiveInterlacingResource
     * @throws IlluminateDatabaseEloquentModelNotFoundException
     */
    public function addMotiveInterlacing(StoreMotiveInterlacing $request): MotiveInterlacingResource
    {
        $user = $request->user();
        $request->merge(['creator_id' => $user->id]);
        if (!Motive::where('id', $request->input('motive_id'))->exists()) {
            abort(404, 'Motive not found');
        }
        if (!InterlacingType::where('id', $request->input('interlacing_id'))->exists()) {
            abort(404, 'Interlacing type not found');
        }
        $motiveInterlacing = MotiveInterlacing::create($request->all());
        return new MotiveInterlacingResource($motiveInterlacing);
    }

    /**
     * Функция удаляет мотив переплетения
     * @param StoreMotiveInterlacing $request 
     * @param int $motive_id
     * @param int $interlacing_id
     */
    public function deleteMotiveInterlacing(Request $request): void
    {
        $motiveId = $request->input('motive_id');
        $InterlacingId = $request->input('interlacing_id');
        $motiveInterlacing = MotiveInterlacing::where('motive_id', $motiveId)->where('interlacing_id', $InterlacingId)->first();
        if (!$motiveInterlacing) {
            abort(404, 'Motive Interlacing not found');
        }
        $this->authorize('delete', $motiveInterlacing);
        $motiveInterlacing->delete(); 
    }
}
