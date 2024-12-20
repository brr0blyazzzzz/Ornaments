<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NationType;
use App\Models\MotiveNation;
use App\Http\Resources\NationTypeResource;
use App\Http\Requests\StoreNationType;
class NationTypeController extends Controller
{
      /**
     * Функция возвращает массив типов наций
     * @return AnonymousResourceCollection
     */
    public function getNationTypes()
    {
        $nationTypes = NationType::all();
        return NationTypeResource::collection($nationTypes);
    }

    /**
     * Функция возвращает тип нации по id 
     * @param int $nation_type_id
     * @return NationTypeResource
     */
    public function getNationType($nation_type_id): NationTypeResource
    {
        return new NationTypeResource(NationType::findOrFail($nation_type_id));
    }
       /**
     * Функция добавляет тип национальности в базу
     * @param $request
     */
    public function AddNationType(StoreNationType $request): NationTypeResource{
        $user = $request->user();
        $request->merge(['creator_id' => $user->id]);
        $nation_type=NationType::create($request->all());
        return new NationTypeResource($nation_type);
    }

    /**
     * Функция обновляет тип нации
     * @param StoreNationType $request 
     * @return NationTypeResource
     */
    public function editNationType(StoreNationType $request): NationTypeResource
    {
        $nationType = NationType::findOrFail($request->post('id'));
        if ($request->user()->cannot('update', $nationType)) {
            abort(403, 'Wrong user account!');
        } else {
            $nationType->nation_title = $request->post('nation_title');
            $nationType->save();
            return new NationTypeResource($nationType);
        }
    }
    
    /**
     * Функция удаляет тип национальности
     * @param Request 
     * @param nation_type_id
     * 
     */
    public function deleteNationType(Request $request, $nation_type_id): void {
        $nationType = NationType::findOrFail($nation_type_id);
        $connectedMotivesCount = MotiveNation::where('nation_id', $nation_type_id)->count();
        $this->authorize('delete', $nationType);
        if ($connectedMotivesCount == 0) {
            $nationType->delete();
        } else {
            abort(403, 'Connected motives exist');
        }    
    }
}

