<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media; // Asegúrate de importar el modelo Media

class BusquedaController extends Controller
{
    public function buscar(Request $request)
    {
        // Obtener el valor del parámetro 'query' enviado desde el formulario
        $query = $request->input('query');
        
        // Realizar la búsqueda en la tabla 'media' donde el título coincida con la consulta del usuario
        $resultados = Media::where('titulo_medio', 'like', '%'.$query.'%')->get();

        return view('cine.busqueda', ['resultados' => $resultados, 'query' => $query]);
    }
}
