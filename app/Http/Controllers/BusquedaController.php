<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusquedaController extends Controller
{
    public function buscar(Request $request)
    {
        // Obtener el valor del parámetro 'query' enviado desde el formulario
        $query = $request->input('query');

        return view('cine.busqueda', ['resultados' => $query]);
    }
}