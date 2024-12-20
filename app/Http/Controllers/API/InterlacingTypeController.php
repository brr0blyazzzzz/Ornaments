<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InterlacingType;
use App\Models\MotiveInterlacing;
use App\Http\Resources\InterlacingTypeResource;
use App\Http\Requests\StoreInterlacingType;
class InterlacingTypeController extends Controller
{
    /**
     * Функция возвращает массив переплетений
     * @return JSONArray<InterlacingType>
     */
    public function getInterlacingTypes()
    {
        $interlacingTypes=InterlacingType::All();
        return InterlacingTypeResource::collection($interlacingTypes);
    }

      /**
     * Функция возвращает переплетение по id 
     * @param int interlacing_type_id
     * @return InterlacingType
     */
    public function getInterlacingType($interlacing_type_id): InterlacingTypeResource
    {
        return new InterlacingTypeResource(InterlacingType::findOrFail($interlacing_type_id));
    }

    
     /**
     * Функция добавляет переплетение в базу
     * @param $request
     */
    public function AddInterlacingType(StoreInterlacingType $request): InterlacingTypeResource{
        $user = $request->user();
        $request->merge(['creator_id' => $user->id]);
        $int_type=InterlacingType::create($request->all());
        return new InterlacingTypeResource($int_type);

    }
    
     /**
     * Функция обновляет переплетение по id
     * @param $request 
     */
    public function EditInterlacingType(StoreInterlacingType $request): InterlacingTypeResource {
        $interlacingType = InterlacingType::findOrFail($request->post('id'));
        if ($request->user()->cannot('update',$interlacingType)) { 
            abort(403, 'Wrong user account!');
        } else {
            $interlacingType->interlacing_title = $request->post('interlacing_title');
            $interlacingType->save();
            return new InterlacingTypeResource($interlacingType);
        }
    }
       
    /**
     * Функция удаляет переплетениe по id
     * @param $request 
     * @param interlacing_type_id
     * 
     */
    public function deleteInterlacingType(Request $request, $interlacing_type_id): void {
        $interlacingType = InterlacingType::findOrFail($interlacing_type_id);
        $connectedMotivesCount = MotiveInterlacing::where('interlacing_id', $interlacing_type_id)->count();
        $this->authorize('delete', $interlacingType);
        if ($connectedMotivesCount == 0) {
            $interlacingType->delete();
        } else {
            abort(403, 'Connected motives exist');
        }
    }
}
