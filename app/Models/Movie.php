<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['titulo_medio', 'sinopsis', 'caratula', 'genero', 'duracion_total'];

    // Método para obtener la lista de películas filtradas por categoría
    public static function getByCategory($category)
    {
        // Filtrar las películas por la categoría especificada
        return Movie::where('genero', $category)->get();
    }
}
