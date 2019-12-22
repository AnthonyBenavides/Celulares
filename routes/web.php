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

Route::resource('producto', 'ProductoController');
Route::resource('asesor', 'AsesorController');
Route::resource('marca', 'MarcaController');
Route::resource('proveedor', 'ProveedorController');
Route::resource('rol', 'RolController');
Route::resource('estado', 'EstadoController');
Route::resource('local', 'LocalController');
Route::resource('usuario', 'UserController');
Route::resource('movimiento', 'MovimientoController');
Auth::routes();
