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
   Route::get('/noticias/listar', 'NoticiasController@listar'); 
   Route::get('/noticias/listar/{id}', 'NoticiasController@noticia'); 
   Route::post('/noticias/cadastro', 'NoticiasController@cadastro'); 
   Route::post('/noticias/editar', 'NoticiasController@editar'); 
   Route::post('/noticias/deletar', 'NoticiasController@deletar'); 
   
   Route::get('/guia-comercial/listar', 'GuiaComercialController@listar'); 
   Route::get('/guia-comercial/listar/{id}', 'GuiaComercialController@empresa'); 
   Route::post('/guia-comercial/cadastro', 'GuiaComercialController@cadastro'); 
   Route::post('/guia-comercial/editar', 'GuiaComercialController@editar'); 
   Route::post('/guia-comercial/deletar', 'GuiaComercialController@deletar'); 
   
   Route::get('/botoes/listar', 'BotoesController@listar');
   Route::post('/botoes/cadastro', 'BotoesController@cadastro');
   Route::post('/botoes/deletar', 'BotoesController@deletar');
});
