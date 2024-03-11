<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReproductorController extends Controller
{
    public function index(Request $request)
    {
        // Obtener el nombre de la película de los datos enviados por el enlace
        $pelicula = $request->input('data-pelicula', 'Película no especificada');

        // Hacer algo con el nombre de la película, como mostrarlo en la página
        return view('cine.reproductor')->with('pelicula', $pelicula);
    }
}