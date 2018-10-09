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

/** PÁGINAS **/

// home

Route::get('/page/get-home', 'page\HomeController@getHome');
Route::get('/page/get-header', 'page\HeaderController@getHeader');
Route::get('/page/mostrar-noticia/{url}', 'page\HomeController@mostrarNoticia');

// banner

Route::get('/page/get-footer', 'page\FooterController@getFooter');

// Footer

Route::get('/banner', 'BannerController@listarBanner');

// guia comercial

Route::post('/guia-comercial/cadastro', 'GuiaComercialController@cadastro');  
Route::get('/guia-comercial/page/quantidade', 'page\GuiaComercialController@quantidade');
Route::get('/guia-comercial/page/segmentos', 'page\GuiaComercialController@listarSegmentos');
Route::get('/guia-comercial/page/{pagina}/{segmento}/{cidade}/{categoria}', 'page\GuiaComercialController@listarEmpresas');

Route::get('/guia-comercial/listar/{id}', 'GuiaComercialController@empresa');

// segmento

Route::get('/segmentos/listar', 'SegmentosController@listar');
Route::get('/segmentos-por-categoria/{categoria}', 'SegmentosController@categoria');
Route::get('/segmentos/{segmento}', 'SegmentosController@getSegmento');

// categorias 

Route::get('/categorias/listar-todos', 'CategoriasController@listarTodos');

// contato

Route::post('/contatos/cadastrar', 'ContatosController@cadastrar');

Route::group(['middleware' => 'jwt'], function()
{
   Route::get('/dashboard', 'DashboardController@index');
   
   Route::get('/noticias/listar', 'NoticiasController@listar'); 
   Route::get('/noticias/listar/{id}', 'NoticiasController@noticia'); 
   Route::post('/noticias/cadastro', 'NoticiasController@cadastro'); 
   Route::post('/noticias/editar', 'NoticiasController@editar'); 
   Route::post('/noticias/deletar', 'NoticiasController@deletar'); 
   
   Route::get('/guia-comercial/listar', 'GuiaComercialController@listar'); 
   Route::post('/guia-comercial/editar', 'GuiaComercialController@editar'); 
   Route::post('/guia-comercial/deletar', 'GuiaComercialController@deletar'); 
   
   Route::get('/botoes/listar', 'BotoesController@listar');
   Route::post('/botoes/cadastro', 'BotoesController@cadastro');
   Route::post('/botoes/deletar', 'BotoesController@deletar');
   
   Route::get('/eventos/listar', 'EventosController@listar');
   Route::get('/eventos/listar/{id}', 'EventosController@evento');
   Route::post('/eventos/cadastro', 'EventosController@cadastro');
   Route::post('/eventos/editar', 'EventosController@editar');
   Route::post('/eventos/deletar', 'EventosController@deletar');
   
   Route::get('/categorias/listar', 'CategoriasController@listar');
   Route::post('/categorias/cadastro', 'CategoriasController@cadastro');
   Route::post('/categorias/deletar', 'CategoriasController@deletar');
   
   Route::get('/segmentos/listar-todos', 'SegmentosController@listarTodos');
   Route::post('/segmentos/cadastro', 'SegmentosController@cadastro');
   Route::post('/segmentos/deletar', 'SegmentosController@deletar');
   
   Route::get('/banner/listar-todos', 'BannerController@listarTodos');
   Route::post('/banner/cadastro', 'BannerController@cadastro');
   Route::post('/banner/deletar', 'BannerController@deletar');
   
   Route::get('/contatos/listar-todos', 'ContatosController@listarTodos');
   Route::post('/contatos/deletar', 'ContatosController@deletar');   
   
});
