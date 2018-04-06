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

Route::resource('inicio/configurar_inicio','InicioController');
Route::resource('fabrica/configurar_fabrica','FabricaController');
Route::resource('distribuidora/configurar_distribuidora','DistribuidoraController');
