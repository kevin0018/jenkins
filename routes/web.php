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

Route::redirect('/', 'home');

Route::get('home', function () {
    return view('cine.home');
})->name('cine_home');

Route::get('lista', function() {
    return view('cine.lista_peliculas');
})->name('cine_lista_peliculas');

Route::get('inicio', function() {
    return view('cine.inicio');
})->name('cine_inicio');