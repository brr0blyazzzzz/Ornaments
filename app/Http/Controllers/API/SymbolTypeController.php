<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SymbolType;
use App\Models\MotiveSymbol;
use App\Http\Resources\SymbolTypeResource;
use App\Http\Requests\StoreSymbolType;
class SymbolTypeController extends Controller
{
    /**
     * Функция возвращает массив символов
     * @return JSONArray<SymbolType>
     */
    public function getSymbolTypes()
    {
        $symbolTypes=SymbolType::All();
        return SymbolTypeResource::collection($symbolTypes);
    }
    
    /**
     * Функция возвращает массив типов символов по id 
     * @param int symbol_type_id
     * @return SymbolType
     */
    public function getSymbolType($symbol_type_id): SymbolTypeResource
    {
        return new SymbolTypeResource(SymbolType::findOrFail($symbol_type_id));
    }

     /**
     * Функция добавляет тип символа в базу
     * @param $request
     */
    public function AddSymbolType(StoreSymbolType $request): SymbolTypeResource{
        $user = $request->user();
        $request->merge(['creator_id' => $user->id]);
        $symbol_type=SymbolType::create($request->all());
        return new SymbolTypeResource($symbol_type);

    }
    /**
     * Функция обновляет типы символов
     * @param Request 
     */
    public function EditSymbolType(StoreSymbolType $request): SymbolTypeResource {
        $symbol_type=SymbolType::findOrFail($request->post('id'));
        if ($request->user()->cannot('update',$symbol_type)) { 
            abort(403, 'Wrong user account!');
        } else {
        $symbol_type->symbol_title = $request->post('symbol_title');
        $symbol_type->save();
            return new SymbolTypeResource($symbol_type);
        }
    } 

    /**
     * Функция удаляет тип символа
     * @param Request 
     * @param symbol_type_id
     * 
     */
    public function deleteSymbolType(Request $request, $symbol_type_id): void {
        $symbolType = SymbolType::findOrFail($symbol_type_id);
        $connectedMotivesCount = MotiveSymbol::where('symbol_id', $symbol_type_id)->count();
        $this->authorize('delete', $symbolType);
        if ($connectedMotivesCount == 0) {
            $symbolType->delete();
        } else {
            abort(403, 'Connected motives exist');
        }    
    }
}

