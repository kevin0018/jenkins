<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Capitulo;
use App\Models\Serie;

class CapituloController extends Controller {

    public function create()
    {
        $series = Serie::all();
        return view('admin.movieMaker', compact('series'));
    }

    /**
     * Almacena un nuevo capítulo en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request) {
        // Validación de los datos del formulario
        $request->validate([
            'nombreCapitulo' => 'required|string|max:255',
            'numeroTemporada' => 'required|numeric|min:0',
            'numeroEpisodio' => 'required|numeric|min:0',
            'duracionCapitulo' => 'required|integer',
            'linkCapitulo' => 'required|url',
        ]);

        // Guarda el capítulo en la base de datos
        $capitulo = new Capitulo();
        $capitulo->nombre_capitulo = $request->nombreCapitulo;
        $capitulo->numero_temporada = $request->numeroTemporada;
        $capitulo->temporada_id = $request->numeroTemporada;
        $capitulo->numero_episodio = $request->numeroEpisodio;
        $capitulo->duracion = $request->duracionCapitulo;

        // Extracción del ID de YouTube
        $youtubeId = $this->extractYoutubeId($request->input('linkCapitulo'));
        $capitulo->link = $youtubeId;
        $capitulo->save();

        // Redirecciona o responde según sea necesario
        return redirect()->route('cine_home_p')->with('success', 'Chapter has been added successfully!');
    }

    /**
     * Extrae el ID de YouTube de un enlace dado.
     *
     * @param  string  $url
     * @return string|null
     */
    private function extractYoutubeId($url)
    {
        $pattern = '/(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v(?:i)?=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/';
        preg_match($pattern, $url, $matches);
        return isset($matches[1]) ? $matches[1] : null;
    }
}
