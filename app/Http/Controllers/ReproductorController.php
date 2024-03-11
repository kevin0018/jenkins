<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReproductorController extends Controller
{
    public function index(Request $request)
    {
        $pelicula = $request->input('data-pelicula', 'Película no especificada');
   
        return view('cine.reproductor')->with('pelicula', $pelicula);
    }
}