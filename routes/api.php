<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\NationTypeController;
use App\Http\Controllers\API\SymbolTypeController;
use App\Http\Controllers\API\InterlacingTypeController;
use App\Http\Controllers\API\TypeController;
use App\Http\Controllers\API\MotiveController;
use App\Http\Controllers\API\MotiveSymbolController;
use App\Http\Controllers\API\MotiveNationController;
use App\Http\Controllers\API\MotiveInterlacingController;
use App\Http\Controllers\API\MotiveTypeController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware'=>'auth:sanctum'], function(): void {
    Route::put("Motive/add", [MotiveController::class, 'addMotive']);
    Route::put("InterlacingType/add", [InterlacingTypeController::class, 'AddInterlacingType']);
    Route::put("NationType/add", [NationTypeController::class, 'AddNationType']);
    Route::put("SymbolType/add", [SymbolTypeController::class, 'AddSymbolType']);
    Route::put("Type/add", [TypeController::class, 'AddType']);
    Route::put("Motive/edit", [MotiveController::class, 'editMotive']);
    Route::put("InterlacingType/edit", [InterlacingTypeController::class, 'EditInterlacingType']);
    Route::put("NationType/edit", [NationTypeController::class, 'EditNationType']);
    Route::put("SymbolType/edit", [SymbolTypeController::class, 'EditSymbolType']);
    Route::put("Type/edit", [TypeController::class, 'EditType']);
    Route::get("Motive/delete/{id}", [MotiveController::class, 'deleteMotive']);
    Route::get("InterlacingType/delete/{id}", [InterlacingTypeController::class, 'deleteInterlacingType']);
    Route::get("NationType/delete/{id}", [NationTypeController::class, 'deleteNationType']);
    Route::get("SymbolType/delete/{id}", [SymbolTypeController::class, 'deleteSymbolType']);
    Route::get("Type/delete/{id}", [TypeController::class, 'deleteType']);
    Route::get("MotiveSymbol/delete", [MotiveSymbolController::class, 'deleteMotiveSymbol']);
    Route::put("MotiveSymbol/add", [MotiveSymbolController::class, 'addMotiveSymbol']);
    Route::get("MotiveNation/delete", [MotiveNationController::class, 'deleteMotiveNation']);
    Route::put("MotiveNation/add", [MotiveNationController::class, 'addMotiveNation']);
    Route::post("MotiveInterlacing/delete", [MotiveInterlacingController::class, 'deleteMotiveInterlacing']);
    Route::put("MotiveInterlacing/add", [MotiveInterlacingController::class, 'addMotiveInterlacing']);
    Route::get("MotiveType/delete", [MotiveTypeController::class, 'deleteMotiveType']);
    Route::put("MotiveType/add", [MotiveTypeController::class, 'addMotiveType']);
});

Route::get("NationTypes/all", [NationTypeController::class, 'getNationTypes']);
Route::get("SymbolTypes/all", [SymbolTypeController::class, 'getSymbolTypes']);
Route::get("InterlacingTypes/all", [InterlacingTypeController::class, 'getInterlacingTypes']);
Route::get("Types/all", [TypeController::class, 'getTypes']);
Route::get("Motives/all", [MotiveController::class, 'getMotives']);
Route::get("Motive/{id}", [MotiveController::class, 'getMotive']);
Route::get("NationType/{id}", [NationTypeController::class, 'getNationType']);
Route::get("SymbolType/{id}", [SymbolTypeController::class, 'getSymbolType']);
Route::get("InterlacingType/{id}", [InterlacingTypeController::class, 'getInterlacingType']);
Route::get("Type/{id}", [TypeController::class, 'getType']);
