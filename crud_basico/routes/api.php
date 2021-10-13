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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('jogo', 'JogosController@getAllGames');
Route::get('jogo/{id}', 'JogosController@getGame');
Route::post('jogo', 'JogosController@createGame');
Route::put('jogo/{id}', 'JogosController@updateGame');
Route::delete('jogo/{id}','JogosController@deleteGame');
