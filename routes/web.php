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
	return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*Clientes*/
Route::get('clientes','ClienteController@index')->name('clientes');
Route::post('clientes/new','ClienteController@store')->name('clientes.new');

/* Articulos */
Route::get('articulos','ArticuloController@index')->name('articulos');

/* Tipos de Articulos */
Route::get('api/tipos','TipoArticuloController@tipos');

/* Pedidos */
Route::get('pedidos', 'PedidosController@index')->name('pedidos');
Route::get('pedidos/new', 'PedidosController@new')->name('pedidos.new');
Route::get('pedidos/clientes', 'PedidosController@clientes');
Route::get('pedidos/articulos', 'PedidosController@articulos');