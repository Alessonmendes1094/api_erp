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
