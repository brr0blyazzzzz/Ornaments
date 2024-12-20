<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Resources\Json\Anonymous\ResourceCollection; 
use App\Http\Resources\MotiveResource; 
use App\Http\Controllers\Controller;
use App\Models\Motive; 
use Illuminate\Http\Request;
use App\Http\Requests\StoreMotive;

class MotiveController extends Controller
{
     /**
     * Функция возвращает массив мотивов
     * @return JSONArray<motive>
     */
    public function getMotives()
    {
        $motives = Motive::all();
    return MotiveResource::collection($motives);
    }

    /**
     * Функция возвращает массив мотивов по id
     * @param int motive_id
     * @return Motive
     */
    public function getMotive($motive_id): MotiveResource
    {
        return new MotiveResource(Motive::findOrFail($motive_id));
    }

    /**
     * Функция добавляет мотив в базу
     * @param Motive
     */
    public function addMotive(StoreMotive $request): MotiveResource{
        $user = $request->user();
        $request->merge(['creator_id' => $user->id]);
        $motive=Motive::create($request->all());
        return new MotiveResource($motive);
    }

    /**
     * Функция обновляет мотив
     * @param Request 
     */
    public function editMotive(StoreMotive $request): MotiveResource {
        $motive = Motive::findOrFail($request->post('id'));
        if ($request->user()->cannot('update', $motive)) {
            abort(403,'Wrong user account');
        } else {
            $motive->motive_title = $request->post('motive_title');
            $motive->motive_source = $request->post('motive_title');
            $motive->motive_date = $request->post('motive_date');
            $motive->motive_notes = $request->post('motive_notes');
            $motive->motive_img = $request->post('motive_img');
            $motive->save();
        return new MotiveResource($motive);
        }
    }

    /**
     * Функция удаляет мотив
     * @param Request 
     * @param motive_id
     * 
     */
    public function deleteMotive(Request $request,$motive_id): void {
        $motive = Motive::findOrFail($motive_id);
        $this->authorize('delete',$motive);
        $motive->delete();
    }  
} 
