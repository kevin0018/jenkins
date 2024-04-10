<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;

class MediaController extends Controller
{
    public function index()
    {
        $mediasByCategory = Media::all()->groupBy('genero');
        return view('cine.lista_peliculas', compact('mediasByCategory'));
    }
}