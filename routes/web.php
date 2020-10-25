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

Route::get('/propietarios', 'App\Http\Controllers\PropietariosController@index');

Route::get('/propietarios/create', 'App\Http\Controllers\PropietariosController@create');

Route::post('/propietarios', 'App\Http\Controllers\PropietariosController@store');

Route::resource('/propietarios', 'App\Http\Controllers\PropietariosController')->only('destroy');

Route::resource('/propietarios', 'App\Http\Controllers\PropietariosController')->only('edit');

Route::resource('/propietarios', 'App\Http\Controllers\PropietariosController')->only('update');


Route::get('/vehiculos', 'App\Http\Controllers\VehiculosController@index');

Route::get('/vehiculos/create', 'App\Http\Controllers\VehiculosController@create');

Route::post('/vehiculos', 'App\Http\Controllers\VehiculosController@store');

Route::resource('/vehiculos', 'App\Http\Controllers\VehiculosController')->only('destroy');

Route::resource('/vehiculos', 'App\Http\Controllers\VehiculosController')->only('edit');

Route::resource('/vehiculos', 'App\Http\Controllers\VehiculosController')->only('update');


Route::get('/propietario_vehiculo', 'App\Http\Controllers\PropietarioVehiculoController@index');

Route::get('/propietario_vehiculo/create', 'App\Http\Controllers\PropietarioVehiculoController@create');

Route::post('/propietario_vehiculo', 'App\Http\Controllers\PropietarioVehiculoController@store');

Route::get('/listar_datos', 'App\Http\Controllers\ListarDatosController@index');