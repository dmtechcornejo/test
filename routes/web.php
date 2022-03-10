<?php


use app\Http\Controllers\TestController;
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


Route::get('/', 'TestController@index');


// Route::get('/', function () {
//     return view('layouts.index');
// });
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

// Route::get('camara', 'TestController@camara');
// //Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );

