<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    // Especificamos el nombre de la tabla
    protected $table = 'movies';

    // Definimos los campos que son asignables en masa
    protected $fillable = ['titulo_medio', 'sinopsis', 'genero', 'duracion_total'];

    /**
     * Define la relación muchos a muchos con el modelo Actor.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function actors()
    {
        return $this->belongsToMany(Actor::class, 'reparto');
    }

    /**
     * Define la relación muchos a muchos con el modelo User a través de la tabla intermedia Favoritos.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function usuarios()
    {
        return $this->belongsToMany(User::class, 'favorito');
    }
}
