<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $moviesByCategory = Movie::all()->groupBy('genero');
        return view('cine.lista_peliculas', compact('moviesByCategory'));
    }
}
