<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\HerbController;
use  App\Http\Controllers\MedicamentController;
use  App\Http\Controllers\HerbMedicamentController;

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
Route::get('/herbs', [HerbController::class, 'index']);
Route::post('/herbs/store', [HerbController::class, 'store']);
Route::post('/herbs/show', [HerbController::class, 'show']);
Route::post('/herbs/update', [HerbController::class, 'update']);
Route::get('/herbs/destroy', [HerbController::class, 'destroy']);
Route::get('/herbs/query', [HerbController::class, 'query']);

Route::get('/medicaments', [MedicamentController::class, 'index']);
Route::post('/medicaments/store', [MedicamentController::class, 'store']);
Route::post('/medicaments/show', [MedicamentController::class, 'show']);
Route::post('/medicaments/update', [MedicamentController::class, 'update']);
Route::get('/medicaments/destroy', [MedicamentController::class, 'destroy']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
