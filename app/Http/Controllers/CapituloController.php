<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Capitulo;

class CapituloController extends Controller
{
    /**
     * Almacena un nuevo capítulo en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validación de los datos del formulario
        $request->validate([
            'nombreCapitulo' => 'required|string|max:255',
            'serieCapitulo' => 'required|exists:serie,id', // Validar que la serie seleccionada exista en la base de datos
            'numeroTemporada' => 'required|numeric|min:0',
            'numeroEpisodio' => 'required|numeric|min:0',
            'duracionCapitulo' => 'required|integer',
            'caratulaCapitulo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Ejemplo de validación de una imagen
            'linkCapitulo' => 'required|url',
        ]);

        // Guarda el capítulo en la base de datos
        $capitulo = new Capitulo();
        $capitulo->nombre_capitulo = $request->input('nombreCapitulo');
        $capitulo->serie_id = $request->input('serieCapitulo');
        $capitulo->numero_temporada = $request->input('numeroTemporada');
        $capitulo->numero_episodio = $request->input('numeroEpisodio');
        $capitulo->duracion = $request->input('duracionCapitulo');

        // Procesa y guarda la imagen de la carátula
        if ($request->hasFile('caratulaCapitulo')) {
            $imageName = time().'.'.$request->file('caratulaCapitulo')->extension();  
            $request->file('caratulaCapitulo')->move(public_path('images'), $imageName);
            $capitulo->caratula = $imageName;
        }

        // Extracción del ID de YouTube
        $youtubeId = $this->extractYoutubeId($request->input('linkCapitulo'));
        $capitulo->link = $youtubeId;

        $capitulo->save();

        // Redirecciona o responde según sea necesario
        return redirect()->route('cine_home_p')->with('success', '¡El capítulo se ha creado correctamente!');
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
