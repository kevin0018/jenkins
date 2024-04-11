<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReproductorController extends Controller
{
    public function index(Request $request)
    {
        $pelicula_title = $request->input('pelicula-title', 'Película no especificada');
        $pelicula_link = $request->input('pelicula-link', 'Link no especificado');
   
        return view('cine.reproductor')->with([
            'pelicula_title' => $pelicula_title,
            'pelicula_link' => $pelicula_link
        ]);
    }
}
