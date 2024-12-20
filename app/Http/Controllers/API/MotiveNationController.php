<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MotiveNation;
use App\Http\Resources\MotiveNationResource;
use App\Http\Requests\StoreMotiveNation;
use App\Models\Motive;
use App\Models\NationType;

class MotiveNationController extends Controller
{

/**
 * Функция добавляет нацию мотива в базу
 * @param StoreMotiveNation $request
 * @return MotiveNationResource
 * @throws IlluminateDatabaseEloquentModelNotFoundException
 */
public function addMotiveNation(StoreMotiveNation $request): MotiveNationResource
{
    $user = $request->user();
    $request->merge(['creator_id' => $user->id]);
    if (!Motive::where('id', $request->input('motive_id'))->exists()) {
        abort(404, 'Motive not found');
    }
    if (!NationType::where('id', $request->input('nation_id'))->exists()) {
        abort(404, 'Nation not found');
    }
    $motiveNation = MotiveNation::create($request->all());
    
    return new MotiveNationResource($motiveNation);
}


    /**
     * Функция удаляет нацию мотива по motive_id и nation_id
     * @param Request $request 
     * @param int $motive_id
     * @param int $nation_id
     */
    public function deleteMotiveNation(Request $request): void
    {
        $motiveId = $request->input('motive_id');
        $nationId = $request->input('nation_id');
        $motiveNation = MotiveNation::where('motive_id', $motiveId)
            ->where('nation_id', $nationId)
            ->first();
        if (!$motiveNation) {
            abort(404, 'Motive nation not found');
        }
        $this->authorize('delete', $motiveNation);
        $motiveNation->delete();
    }

}

