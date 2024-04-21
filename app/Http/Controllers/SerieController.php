<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serie;


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
                'seasons' => 'required|integer',
                'sinopsisSerie' => 'required|string',
                'duracionSerie' => 'required|integer',
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
    
            // Redireccionar a la página de inicio u otra página
            return redirect()->route('cine_home_p')->with('success', '¡La serie se ha creado correctamente!');               }


            public function capitulos(Serie $serie)
            {
                // Obtener los capítulos de la serie seleccionada
                $capitulos = Capitulo::where('serie_id', $serie->id)->get();
                
                // Pasar los datos de la serie y los capítulos a la vista
                return view('series.capitulos', compact('serie', 'capitulos'));
            }
    
}
