<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Rutas Categorias
Route::get('/categoria', 'CategoriaController@index')->name('categoria.index');
Route::get('/categoria/create', 'CategoriaController@create')->name('categoria.create');
Route::post('/categoria/store', 'CategoriaController@store')->name('categoria.store');
Route::post('/categoria/{categoria}/desactivar', 'CategoriaController@desactivar')->name('categoria.desactivar');
Route::post('/categoria/{categoria}/activar', 'CategoriaController@activar')->name('categoria.activar');
Route::get('/categoria/{categoria}/edit', 'CategoriaController@edit')->name('categoria.edit');
Route::put('/categoria/{categoria}/update', 'CategoriaController@update')->name('categoria.update');


//Rutas Productos
Route::get('/producto', 'ProductoController@index')->name('producto.index');
Route::get('/producto/create', 'ProductoController@create')->name('producto.create');
Route::post('/producto/store', 'ProductoController@store')->name('producto.store');
Route::get('/producto/{producto}/edit', 'ProductoController@edit')->name('producto.edit');
Route::put('/producto/{producto}', 'ProductoController@update')->name('producto.update');
Route::delete('/producto/{producto}', 'ProductoController@destroy')->name('producto.destroy');


//Rutas Galeria producto
Route::get('/galeria/{producto}', 'GaleriaController@index')->name('galeria.index');
Route::post('/galeria/store', 'GaleriaController@store')->name('galeria.store');
Route::delete('/galeria/{galeria}', 'GaleriaController@destroy')->name('galeria.destroy');