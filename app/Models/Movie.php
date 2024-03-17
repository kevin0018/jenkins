<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    // Especificamos el nombre de la tabla
    protected $table = 'movies';

    // Definimos los campos que son asignables en masa
    protected $fillable = ['titulo_medio', 'sinopsis', 'genero', 'duracion_total'];
}
