<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReproductorController;
use App\Http\Controllers\BusquedaController;

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

Route::redirect('/', 'home');

Route::get('inicio', function() {
    return view('cine.inicio');
})->name('cine_inicio');

Route::post('inicio', function() {
    return view('cine.inicio');
})->name('cine_inicio_p');

Route::get('busqueda', [BusquedaController::class, 'buscar'])->name('cine_busqueda');

Route::get('reproductor', 'App\Http\Controllers\ReproductorController@index')->name('cine_reproductor');

Route::get('lista', function() {
    return view('cine.lista_peliculas');
})->name('cine_lista_peliculas');

Route::get('home', function () {
    return view('cine.home');
})->name('cine_home');

Route::get('login', function () {
    return view('cine.login');
})->name('cine_login');

Route::post('login', function () {
    return view('cine.login');
})->name('cine_login_p');

Route::post('pasarelaPago', function () {
    return view('cine.pasarelaPago');
})->name('cine_pasarelaPago');

Route::get('registro', function () {
    return view('cine.registro');
})->name('cine_registro');

Route::get('datosUsuario', function () {
    return view('cine.datosUsuario');
})->name('cine_datos');
