<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Type;
use App\Models\MotiveType;
use App\Http\Resources\TypeResource;
use App\Http\Requests\StoreType;
class TypeController extends Controller
{
    /**
     * Функция возвращает массив типов мотивов
     * @return JSONArray<Type>
     */
    public function getTypes()
    {
        $Types=Type::All();
        return TypeResource::collection($Types);
    }
      /**
     * Функция возвращает массив типов по id 
     * @param int type_id
     * @return Type
     */
    public function getType($type_id): TypeResource
    {
        return new TypeResource(Type::findOrFail($type_id));
    }
    
    /**
     * Функция добавляет тип мотива в базу
     * @param $request
     */
    public function AddType(StoreType $request): TypeResource{
        $user = $request->user();
        $request->merge(['creator_id' => $user->id]);
        $type=Type::create($request->all());
        return new TypeResource($type);

    }

     /**
     * Функция обновляет типы мотивов
     * @param Request 
     */
    public function EditType(StoreType $request): TypeResource {
        $type=Type::findOrFail($request->post('id'));
        if ($request->user()->cannot('update',$type)) { 
            abort(403, 'Wrong user account!');
        } else {
        $type->type_title = $request->post('type_title');
        $type->save();
            return new TypeResource($type);
        }
    } 

    /**
     * Функция удаляет тип мотива
     * @param Request 
     * @param type_id
     * 
     */
    public function deleteType(Request $request, $type_id): void {
        $type = Type::findOrFail($type_id); 
        $connectedMotivesCount = MotiveType::where('type_id', $type_id)->count();
        $this->authorize('delete', $type);
        if ($connectedMotivesCount == 0) {
            $type->delete();
        } else {
            abort(403, 'Connected motives exist');
        }    
    }
}

