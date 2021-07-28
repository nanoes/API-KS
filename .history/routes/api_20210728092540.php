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

Route::get('tratamientos', 'App\Http\Controllers\API\TratamientoController@index');
Route::post('tratamientos', 'App\Http\Controllers\API\TratamientoController@store');
Route::put('tratamientos/{id}', 'App\Http\Controllers\API\TratamientoController@update');
Route::delete('tratamientos/{id}', 'App\Http\Controllers\API\TratamientoController@delete');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
