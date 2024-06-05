<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;
use App\Models\Serie;

class BusquedaController extends Controller
{
    // Método para mostrar el formulario de búsqueda
    public function mostrarBuscador()
    {
        // Lista de categorías fijas
        $categories = ['Action', 'Comedy', 'Drama', 'Sci-fi', 'Fantasy'];

        return view('cine.buscador', compact('categories'));
    }

    // Método para manejar la búsqueda
    public function search(Request $request)
    {
        // Inicializar consulta en el modelo Media (películas) por defecto
        $query = Media::query();

        // Verificar si se especifica el tipo
        if ($request->filled('type')) {
            // Filtrar por tipo
            $tipo = $request->input('type');
            if ($tipo === 'series') {
                // Si el tipo es 'series', cambiar la consulta al modelo Serie
                $query = Serie::query();
            }
        }

        // Verificar si se especifican categorías
        if ($request->filled('categories')) {
            // Filtrar por categorías
            $categorias = $request->input('categories');
            // Filtrar en la tabla correspondiente según el tipo
            if ($tipo === 'movie') {
                // Si el tipo es película, filtrar en la tabla Media
                $query->whereIn('genero', $categorias);
            }
        }

        // Verificar si se especifica duración y el tipo es 'movie'
        if ($request->filled('duration') && $tipo === 'movie') {
            // Filtrar por duración solo si el tipo es película
            $duracion = $request->input('duration');
            switch ($duracion) {
                case 'less_than_1h':
                    $query->where('duracion_total', '<', 60);
                    break;
                case 'between_1h_and_2h':
                    $query->whereBetween('duracion_total', [60, 120]);
                    break;
                case 'more_than_2h':
                    $query->where('duracion_total', '>', 120);
                    break;
            }
        }

        // Agregar el resto de la lógica de búsqueda aquí...

        // Ejecutar la consulta
        $resultados = $query->get();

        // Pasar los resultados a la vista
        return view('cine.busqueda', ['resultados' => $resultados]);
    }
}
