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

Route::get('usuarios_login', 'usuariosController@login');

Route::get('criar_usuario', 'usuariosController@cadasdro');

Route::post('usuarios_login', 'usuariosController@realizarLogin');

Route::post('fazer_login', 'usuariosController@cadastroUsuario');

