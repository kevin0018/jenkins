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

//HOME PÁGINA PRINCIPAL 
Route::redirect('/', 'home');

Route::get('home', function () {
    return view('cine.home');
})->name('cine_home');

//INICIO
Route::get('home', function() {
    return view('cine.inicio');
})->name('cine_home_user');

Route::post('home', function() {
    return view('cine.inicio');
})->name('cine_home_p');


//LOGIN
Route::get('login', function () {
    return view('cine.login');
})->name('cine_login');

Route::post('login', function () {
    return view('cine.login');
})->name('cine_login_p');

//REGISTRO
Route::get('registro', function () {
    return view('cine.registro');
})->name('cine_registro');

Route::get('userData', function () {
    return view('cine.datosUsuario');
})->name('cine_user_data');

//BUSQUEDA

Route::get('busqueda', [BusquedaController::class, 'buscar'])->name('cine_busqueda');

Route::get('reproductor', 'App\Http\Controllers\ReproductorController@index')->name('cine_reproductor');

//LISTA PELICULAS
Route::get('list', function() {
    return view('cine.lista_peliculas');
})->name('cine_lista_peliculas');


//PASARELA DE PAGO
Route::post('pasarelaPago', function () {
    return view('cine.pasarelaPago');
})->name('cine_pasarelaPago');


//SUSCRIPCIONES
Route::get('suscriptions', function () {
    return view('cine.suscriptions');
})->name('cine_suscriptions');

//Terminos y Privacidad
Route::get('termsofuse', function() {
    return view('cine.terminos_de_uso');
})->name('cine_terms_of_use');





