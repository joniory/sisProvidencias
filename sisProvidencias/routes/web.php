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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//SEGURIDADES
Route::get('/Seguridades/seguridades', 'Seguridades\seguridadesController@index')->name('seguridades');
Route::get('/Seguridades/usuarios', 'Seguridades\usuariosController@index')->name('usuarios');