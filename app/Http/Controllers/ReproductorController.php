<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;

class ReproductorController extends Controller
{
    public function index(Request $request)
    {
        $pelicula_title = $request->input('pelicula-title', 'Película no especificada');
        $pelicula_link = $request->input('pelicula-link', 'Link no especificado');
        
        // Obtener detalles de la película desde la base de datos
        $pelicula = Media::where('link', $pelicula_link)->first();

        return view('cine.reproductor')->with([
            'pelicula_title' => $pelicula_title,
            'pelicula_link' => $pelicula_link,
            'pelicula' => $pelicula, // Pasar los detalles de la película a la vista
        ]);
    }
}
