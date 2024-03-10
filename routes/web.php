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

Route::redirect('/', '/cine/home');

Route::get('/cine/home', function () {
    return view('cine.home');
})->name('cine_home');

Route::get('/cine/login', function () {
    return view('cine.login');
})->name('cine_login');

Route::post('/cine/login', function () {
    return view('cine.login');
})->name('cine_loginp');

Route::post('/cine/pasarelaPago', function () {
    return view('cine.pasarelaPago');
})->name('PasarelaPago');

Route::get('/cine/registro', function () {
    return view('cine.registro');
})->name('cine_registro');
Route::get('/cine/datosUsuario', function () {
    return view('cine.datosUsuario');
})->name('cine_datos');