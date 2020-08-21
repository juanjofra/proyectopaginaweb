<?php

use Illuminate\Support\Facades\Route;



//Rutas web
Route::get('/', 'WebController@index')->name('web.index');
Route::get('/productos', 'WebController@productos')->name('web.productos');
Route::get('/categoria-productos/{categoria}', 'WebController@categoriaProductos')->name('web.categoria-productos');
Route::get('/detalle-producto/{producto}', 'WebController@detalleProducto')->name('web.detalle-producto');
Route::get('/nosotros', 'WebController@nosotros')->name('web.nosotros');
Route::get('/contacto', 'WebController@contacto')->name('web.contacto');


//Rutas Auth
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
Auth::routes();

Route::get('/admin/home', 'HomeController@index')->name('home');


//Rutas Usuarios
Route::get('/admin/user', 'UserController@index')->name('user.index');
Route::post('/admin/user/{user}/denegar', 'UserController@denegar')->name('user.denegar');
Route::post('/admin/user/{user}/autorizar', 'UserController@autorizar')->name('user.autorizar');

//Rutas Categorias
Route::get('/admin/categoria', 'CategoriaController@index')->name('categoria.index');
Route::get('/admin/categoria/create', 'CategoriaController@create')->name('categoria.create');
Route::post('/admin/categoria/store', 'CategoriaController@store')->name('categoria.store');
Route::post('/admin/categoria/{categoria}/desactivar', 'CategoriaController@desactivar')->name('categoria.desactivar');
Route::post('/admin/categoria/{categoria}/activar', 'CategoriaController@activar')->name('categoria.activar');
Route::get('/admin/categoria/{categoria}/edit', 'CategoriaController@edit')->name('categoria.edit');
Route::put('/admin/categoria/{categoria}/update', 'CategoriaController@update')->name('categoria.update');
Route::post('/admin/categoria/{categoria}/destacar', 'CategoriaController@destacar')->name('categoria.destacar');
Route::post('/admin/categoria/{categoria}/nodestacar', 'CategoriaController@nodestacar')->name('categoria.nodestacar');


//Rutas Productos
Route::get('/admin/producto', 'ProductoController@index')->name('producto.index');
Route::get('/admin/producto/create', 'ProductoController@create')->name('producto.create');
Route::post('/admin/producto/store', 'ProductoController@store')->name('producto.store');
Route::get('/admin/producto/{producto}/edit', 'ProductoController@edit')->name('producto.edit');
Route::put('/admin/producto/{producto}', 'ProductoController@update')->name('producto.update');
Route::delete('/admin/producto/{producto}', 'ProductoController@destroy')->name('producto.destroy');
Route::post('/admin/producto/destacar/{producto}', 'ProductoController@destacar')->name('producto.destacar');
Route::post('/admin/producto/nodestacar/{producto}', 'ProductoController@nodestacar')->name('producto.nodestacar');


//Rutas Galeria producto
Route::get('/admin/galeria/{producto}', 'GaleriaController@index')->name('galeria.index');
Route::post('/admin/galeria/store', 'GaleriaController@store')->name('galeria.store');
Route::delete('/admin/galeria/{galeria}', 'GaleriaController@destroy')->name('galeria.destroy');