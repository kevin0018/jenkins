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
            'link' => 'required|string|max:255',
        ]);

        // Guardar la imagen en el almacenamiento de Laravel
        $titulo = $request->titulo_medio;
        $caratulaPath = $request->file('caratula')->storeAs('public', $titulo . '.' . $request->caratula->extension());
        $caratula = str_replace('public/', '', $caratulaPath);

        // Extraer el ID de YouTube del enlace
        $youtubeId = $this->extractYoutubeId($request->link);

        // Crear una nueva instancia del modelo Pelicula y asignar los datos
        $Media = new Media();
        $Media->titulo_medio = $titulo;
        $Media->sinopsis = $request->sinopsis;
        $Media->caratula = $caratula; // Guardamos la ruta de la imagen
        $Media->genero = $request->genero;
        $Media->duracion_total = $request->duracion_total;
        $Media->link = $youtubeId; // Asignamos solo el ID de YouTube

        // Guardar la película en la base de datos
        $Media->save();

        // Redireccionar a la página de inicio u otra página
        return redirect()->route('cine_home_p')->with('success', 'Film create.');
    }

    private function extractYoutubeId($url) {
        $pattern = '/(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v(?:i)?=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/';
        preg_match($pattern, $url, $matches);
        return isset($matches[1]) ? $matches[1] : null;
    }
}
