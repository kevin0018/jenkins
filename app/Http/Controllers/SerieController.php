<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serie;
use App\Models\Capitulo;
use App\Models\Temporada;

    class SerieController extends Controller
    {
        public function index()
        {
            // Obtener todas las series
            $series = Serie::all();
            
            // Pasar los datos de las series a la vista
            return view('cine.lista_serie', compact('series'));
        }   
      
        public function store(Request $request) {
            // Validar los datos del formulario
            $request->validate([
                'nombreSerie' => 'required|string|max:255',
                'generoSerie' => 'required|string|max:255',
                'seasons' => 'required|integer|min:1',
                'sinopsisSerie' => 'required|string',
                'duracionSerie' => 'required|integer|min:1',
                'caratulaSerie' => 'required|image|max:2048',
            ]);
        
            // Procesar y guardar la imagen de la carátula
            $nombreSerie = $request->nombreSerie;
            $caratulaPath = $request->file('caratulaSerie')->storeAs('public', $nombreSerie . '.' . $request->caratulaSerie->extension());
            $caratula = str_replace('public/', '', $caratulaPath);
        
            // Crear una nueva instancia del modelo Serie y asignar los datos
            $serie = new Serie();
            $serie->nombre = $nombreSerie; 
            $serie->genero = $request->generoSerie;
            $serie->numero_temporadas = $request->seasons;
            $serie->sinopsis = $request->sinopsisSerie;
            $serie->duracion_total = $request->duracionSerie;
            $serie->caratula = $caratula;
        
            // Guardar la serie en la base de datos
            $serie->save();
        
            // Crear y guardar las temporadas asociadas con la serie
            for ($i = 1; $i <= $request->seasons; $i++) {
                $temporada = new Temporada();
                $temporada->nombre = 'Temporada ' . $i;
                $temporada->numero_temporada = $i;
                // Asociar la temporada con la serie
                $serie->temporadas()->save($temporada);
            }
        
            // Redireccionar a la página de inicio u otra página
            return redirect()->route('cine_home_p')->with('success', 'The series has been successfully created!');              
        }


            public function show($id)
            {
                // Obtener la serie
                $serie = Serie::findOrFail($id);

                // Cargar todas las temporadas con sus capítulos
                $serie->load('temporadas.capitulos');

                // Obtener todos los capítulos de todas las temporadas de la serie
                $capitulos = $serie->temporadas->flatMap->capitulos;

                // Pasar también las temporadas a la vista
                $temporadas = $serie->temporadas;

                return view('cine.capitulos', [
                    'capitulos' => $capitulos, 
                    'serie' => $serie,
                    'temporadas' => $temporadas,
                ]);
            }

            public function getTemporadas(Serie $serie)
            {
                try {
                    // Obtener todas las temporadas de la serie
                    $temporadas = $serie->temporadas;
            
                    // Devolver las temporadas como respuesta JSON
                    return response()->json($temporadas);
                } catch (\Exception $e) {
                    // Manejar la excepción, por ejemplo, registrarla y devolver un mensaje de error
                    \Log::error('Error getting seasons: ' . $e->getMessage());
                    return response()->json(['error' => 'An error occurred while fetching the seasons.'], 500);
                }
            }
    
}
