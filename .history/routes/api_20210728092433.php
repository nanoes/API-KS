<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::resource('tratamientos', TratamientoController::class);
Route::get('tratamientos', 'App\Http\Controllers\API\TratamientoController@index');
Route::post('tratamientos', 'App\Http\Controllers\API\TratamientoController@store');
Route::get('tratamientos', 'App\Http\Controllers\API\TratamientoController@update');
Route::get('tratamientos', 'App\Http\Controllers\API\TratamientoController@delete');
Route::post('tratamientos', TratamientoController::class);
Route::put('tratamientos/{id}', TratamientoController::class);
Route::delete('tratamientos/{id}', TratamientoController::class);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
