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
    return view('inicio');
});
Route::get('/layouts/fabrica', function () {
    return view('layouts.fabrica');
});
Route::get('/layouts/distribuidora', function () {
    return view('layouts.distribuidora');
});
Route::get('/.admin', function () {
    return view('layouts.admin');
});

Route::resource('inicio/configurar_inicio','InicioController');
Route::resource('fabrica/configurar_fabrica','FabricaController');
Route::resource('fabrica/slider','SliderController');
Route::resource('distribuidora/configurar_distribuidora','DistribuidoraController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
