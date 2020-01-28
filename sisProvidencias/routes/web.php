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

//SEGURIDADES
Route::get('/Seguridades/seguridades', 'Seguridades\seguridadesController@index')->name('seguridades');
Route::get('/Seguridades/perfiles', 'Seguridades\perfilesController@index')->name('perfiles');
Route::get('/Seguridades/usuarios', 'Seguridades\usuariosController@index')->name('usuarios');
Route::get('/Seguridades/modulos', 'Seguridades\modulosController@index')->name('modulos');
Route::get('/Seguridades/procesos', 'Seguridades\procesosController@index')->name('procesos');
Route::get('/Seguridades/acciones', 'Seguridades\accionesController@index')->name('acciones');
Route::get('/Seguridades/accionesPorModulo', 'Seguridades\accionesPorModuloController@index')->name('accionesPorModulo');
Route::get('/Seguridades/perfilesPorModulo', 'Seguridades\perfilesPorModuloController@index')->name('perfilesPorModulo');
Route::get('/Seguridades/usuarioAgenciaPerfil', 'Seguridades\usuarioAgenciaPerfilController@index')->name('usuarioAgenciaPerfil');
Route::get('/Seguridades/horarioAcceso', 'Seguridades\horarioAccesoController@index')->name('horarioAcceso');
Route::get('/Seguridades/horarioPerfilAgencia', 'Seguridades\horarioPerfilAgenciaController@index')->name('horarioPerfilAgencia');