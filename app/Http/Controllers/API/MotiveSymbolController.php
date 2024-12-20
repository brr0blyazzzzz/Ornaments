<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MotiveSymbol;
use App\Http\Resources\MotiveSymbolResource;
use App\Http\Requests\StoreMotiveSymbol;
use App\Models\Motive;
use App\Models\SymbolType;

class MotiveSymbolController extends Controller
{
    
    /**
     * Функция добавляет символ мотива в базу
     * @param StoreMotiveSymbol $request
     * @return MotiveSymbolResource
     * @throws IlluminateDatabaseEloquentModelNotFoundException
     */
    public function addMotiveSymbol(StoreMotiveSymbol $request): MotiveSymbolResource
    {
        $user = $request->user();
        $request->merge(['creator_id' => $user->id]);
        if (!Motive::where('id', $request->input('motive_id'))->exists()) {
            abort(404, 'Motive not found');
        }
        if (!SymbolType::where('id', $request->input('symbol_id'))->exists()) {
            abort(404, 'Symbol not found');
        }
        $motiveSymbol = MotiveSymbol::create($request->all());
        
        return new MotiveSymbolResource($motiveSymbol);
    }

    /**
     * Функция удаляет символ мотива по motive_id и symbol_id
     * @param Request $request 
     * @return void
     */
    public function deleteMotiveSymbol(Request $request): void
    {
        $motiveId = $request->input('motive_id');
        $symbolId = $request->input('symbol_id');
        $motiveSymbol = MotiveSymbol::where('motive_id', $motiveId)->where('symbol_id', $symbolId)->first();
        if (!$motiveSymbol) {
            abort(404, 'Motive symbol not found');
        }
        $this->authorize('delete', $motiveSymbol);
        $motiveSymbol->delete();
    }
}
