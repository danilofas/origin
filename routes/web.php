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
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', ['as'=>'index', 'uses'=>'HomeController@welcome']);

Route::get('/como-entrar-em-contato', ['as' => 'contato', 'uses' => 'ContatoController@welcome']);
Route::get('/admin/cursos', ['as' => 'cursos.home', 'uses' => 'CursosController@welcome']);
Route::get('/admin/cursos/adicionar', ['as' => 'cursos.add', 'uses' => 'CursosController@adicionar']);
Route::post('/admin/cursos/salvar', ['as' => 'cursos.save', 'uses' => 'CursosController@salvar']);
Route::get('/admin/cursos/pesquisar', ['as' => 'cursos.search', 'uses' => 'CursosController@pesquisar']);
Route::get('/admin/cursos/acao-pesquisa-nome', ['as' => 'cursos.actionSearchName', 'uses' => 'CursosController@acaoPesquisaNome']);
Route::get('/admin/cursos/acao-pesquisa-codigo', ['as' => 'cursos.actionSearchCode', 'uses' => 'CursosController@acaoPesquisaCodigo']);
Route::get('/admin/cursos/acao-lista-editar/{id}', ['as' => 'cursos.actionListEdit', 'uses' => 'CursosController@acaoListaEditar']);
Route::post('/admin/cursos/atualizar/{id}', ['as' => 'cursos.atualizar', 'uses' => 'CursosController@atualizar']);
Route::get('/admin/cursos/apagar/{id}', ['as' => 'cursos.apagar', 'uses' => 'CursosController@apagar']);

