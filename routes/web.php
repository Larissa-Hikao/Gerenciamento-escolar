<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Route::get('/', function () {
    return view('welcome');
});


*/

//ROTA DE USUÁRIO

Route::get('/', 'UsuarioController@index');
Route::get('/from', 'UsuarioController@create');
Route::post('/', 'UsuarioController@store');
Route::get('/{id}/edit', 'UsuarioController@edit');
Route::put('/{id}', 'UsuarioController@update');

//Route::get('/soma/{a}/{b}', 'UsuarioController@soma');


//GET

//POST

//ROTAS DE NIVEL

Route::get('/nivel', 'NivelController@show');
Route::get('/nivel/from', 'NivelController@create');
Route::post('/nivel', 'NivelController@store');
Route::get('/nivel/{id}/edit', 'NivelController@edit');
Route::put('/nivel/{id}', 'NivelController@update');

//PUT

//DELETE

