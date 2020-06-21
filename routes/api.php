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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/ping', fn() => ['pong' => true]);

Route::prefix('/notes')->group(function() {
    Route::get('/', 'NotesController@index');

    Route::get('/{id}', 'NotesController@show');

    Route::post('/', 'NotesController@store');

    Route::put('/{id}', 'NotesController@update');

    Route::delete('/{id}', 'NotesController@destroy');
});

Route::apiResource('/notes', 'NotesController');
