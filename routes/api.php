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


//Route::get('alunos', 'AlunosController@listar');
Route::get('alunos/{id}', 'AlunosController@index');
Route::post('alunos', 'AlunosController@salvar');
Route::put('alunos/{id}', 'AlunosController@salvar');
Route::delete('alunos/{id}', 'AlunosController@excluir');