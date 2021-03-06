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


Route::get('/{id}', function () {
    return view('teste');
});
*/

Route::get('/produto/confirm',    ['as'=>'produto.confirm',    'uses'=>'ProdutoController@confirm']);
Route::get('/produto/{id}',       ['as'=>'produto.index',      'uses'=>'ProdutoController@index']);
Route::get('/produto/{id}/enviar',['as'=>'produto.salvar',     'uses'=>'ProdutoController@salvarProdutos']);

Route::get('/preco/{id}/{qtd}/{cotacao}',       ['as'=>'preco.index',      'uses'=>'PrecoController@index']);
Route::get('/preco/salvar/{id}',['as'=>'preco.salvar',     'uses'=>'PrecoController@salvarPrecos']);
Route::get('/preco/confirm',    ['as'=>'preco.confirm',    'uses'=>'PrecoController@confirm']);

