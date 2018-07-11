<?php

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

Route::post('/login', 'AuthController@login');
Route::get('/logout', 'AuthController@logOut');
Route::get('/validar-sessao', 'AuthController@validarSessao');

/** PÁGINAS **/

Route::get('/dashboard', 'dashboardController@index');

Route::group(['middleware' => 'jwt'], function()
{
   Route::post('/noticias/cadastro', 'NoticiasController@cadastro'); 
});
