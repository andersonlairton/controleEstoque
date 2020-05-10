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
Route::get('/produtos','ProdutoController@lista')->name('produtos.listagem');//nomedocontroler@metodo
Route::get('/produtos/detalhes/{id}','ProdutoController@mostra')->where('id','[0-9]+');//especificando que o id sempre sera numero
Route::get('/produtos/novo','ProdutoController@novo')->name('produtos.novo');
Route::post('/produtos/adiciona','ProdutoController@adiciona')->name('produtos.adiciona');//com o name ,estou nomeando a rota