<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReproductorController;
use App\Http\Controllers\BusquedaController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PeliculaController;


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
Route::redirect('/', 'Jenkins');

Route::get('Jenkins', function () {
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

// Ruta para mostrar el formulario de inicio de sesión
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('cine_login');

// Ruta para manejar la autenticación
Route::post('/login', [AuthController::class, 'authenticate'])->name('cine_login_p');


//REGISTRO
Route::get('registro', function () {
    return view('cine.registro');
})->name('cine_registro');

Route::get('userData', function () {
    return view('cine.datosUsuario');
})->name('cine_user_data');

//BUSQUEDA

Route::get('search', [BusquedaController::class, 'buscar'])->name('cine_busqueda');

Route::get('reproductor', 'App\Http\Controllers\ReproductorController@index')->name('cine_reproductor');


//LISTA PELICULAS
Route::get('list', [MediaController::class, 'index'])->name('cine_lista_peliculas');

//PASARELA DE PAGO
Route::post('pasarelaPago', function () {
    return view('cine.pasarelaPago');
})->name('cine_pasarelaPago');

//Thank you page

Route::post('thankyou_page', function () {
    return view('cine.thankyou_page');
})->name('thankyou_page');



//SUSCRIPCIONES
Route::get('suscriptions', function () {
    return view('cine.suscriptions');
})->name('cine_suscriptions');


//LEGAL
//Terminos y Privacidad
Route::get('legal/termsofuse', function() {
    return view('legal.terminos_de_uso');
})->name('cine_terms_of_use');

Route::get('legal/privacypolicy', function() {
    return view('legal.privacy_policy');
})->name('cine_privacy_policy');

//Que és Jenkins
Route::get('legal/what-is-jenkins', function() {
    return view('legal.what_is_Jenkins');
})->name('what_is_jenkins');

//compatible devices
Route::get('legal/compatible-devices', function() {
    return view('legal.compatible_devices');
})->name('compatible_devices');

//ADMIN
//entorno de pruebas, pulir luego

//Make movie/media

// Route::middleware(['auth', 'admin'])->group(function () {
    Route::post('admin/movieMaker', function () {
        return view('admin.movieMaker');
    })->name('admin_movie_maker');

    Route::get('admin/movieMaker', function () {
        return view('admin.movieMaker');
    })->name('admin_movie_maker');

    Route::post('/guardar-pelicula', [PeliculaController::class, 'store'])->name('guardar_pelicula');

// });