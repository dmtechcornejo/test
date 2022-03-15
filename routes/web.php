<?php


use app\Http\Controllers\TestController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;



Route::get('/', 'TestController@index');


// Route::get('/', function () {
//     return view('layouts.index');
// });
//# Base de Datos
// #Rutas Camaras
 Route::get('/camara', 'TestController@camara');

 // #Rutas Nuestro Equipo
 Route::Get('/equipo', 'TestController@equipo');

// #Rutas Vehiculos
Route::get('/vehiculo', 'TestController@vehiculo');
// Route::get('vehiculo', 'TestController@vehiculo')->name('lista_vehiculo');

// #Rutas Personas
Route::get('/persona', 'TestController@persona');
// Route::get('persona', 'TestController@persona')->name('lista_persona');
// //Route::resource('layouts', TestController::class);
// #Ruta Graficos
Route::get('/grafico', 'TestController@grafico');
// Route::get('camara', 'TestController@camara');
// //Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );

