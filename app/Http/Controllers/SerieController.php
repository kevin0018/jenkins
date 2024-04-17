<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serie;

class SerieController extends Controller
{
    /**
     * Almacena una nueva serie en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombreSerie' => 'required|string|max:255',
            'generoSerie' => 'required|string|max:255',
            'numeroTemporadas' => 'required|integer',
            'sinopsisSerie' => 'required|string',
            'duracionSerie' => 'required|integer',
            'caratulaSerie' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Ejemplo de validación de una imagen
        ]);

        // Procesar y guardar la imagen de la carátula
        $caratulaPath = $request->file('caratulaSerie')->store('public/images');
        $imageName = basename($caratulaPath);

        // Crear una nueva instancia del modelo Serie y asignar los datos
        $serie = new Serie();
        $serie->nombre = $request->input('nombreSerie');
        $serie->genero = $request->input('generoSerie');
        $serie->numero_temporadas = $request->input('numeroTemporadas');
        $serie->sinopsis = $request->input('sinopsisSerie');
        $serie->duracion_total = $request->input('duracionSerie');
        $serie->caratula = $imageName;

        // Guardar la serie en la base de datos
        $serie->save();

        // Redireccionar a la página de inicio u otra página
        return redirect()->route('cine_home_p')->with('success', '¡La serie se ha creado correctamente!');
    }
}
