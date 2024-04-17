<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $fillable = ['nombre', 'sinopsis', 'link', 'caratula', 'genero', 'num_temporadas'];
    // Método para obtener la lista de películas filtradas por categoría
    public static function getByCategory($category)
    {
        // Filtrar las películas por la categoría especificada
        return Media::where('genero', $category)->get();
    }
}
