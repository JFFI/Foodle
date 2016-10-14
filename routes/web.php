<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/','PagesController@index');
Route::get('puestos/crear','PagesController@crearPuesto');
Route::get('puestos/{id}','PagesController@puesto');
Route::post('puestos','PagesController@guardarPuesto');
Route::get('puestos/{id}/editar','PagesController@editarPuesto');
Route::post('puestos/{id}','PagesController@updatePuesto');
Route::get('platillos/{id}','PagesController@platillo');
Route::get('busqueda','PagesController@busqueda');
