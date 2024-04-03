<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;

class PeliculaController extends Controller {
    public function store(Request $request) {
        // Validar los datos del formulario
        $request->validate([
            'titulo_medio' => 'required|string|max:255',
            'sinopsis' => 'required|string',
            'caratula' => 'required|image|max:2048',
            'genero' => 'required|string|max:255',
            'duracion_total' => 'required|string|max:50',
        ]);

        // Guardar la imagen en el almacenamiento de Laravel
        $caratula = $request->file('caratula')->store('caratulas');

        // Crear una nueva instancia del modelo Pelicula y asignar los datos
        $Media = new Media();
        $Media->titulo_medio = $request->titulo_medio;
        $Media->sinopsis = $request->sinopsis;
        $Media->caratula = $caratula; // Guardamos la ruta de la imagen
        $Media->genero = $request->genero;
        $Media->duracion_total = $request->duracion_total;

        // Guardar la película en la base de datos
        $Media->save();

        // Redireccionar a la página de inicio u otra página
        return redirect()->route('cine_home_p')->with('success', 'Pelicula creada exitosamente.');
    }
}
