<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    protected $fillable = ['nombre', 'genero', 'numero_temporadas', 'sinopsis', 'duracion_total', 'caratula'];

    public function temporadas()
    {
        return $this->hasMany(Temporada::class);
    }

    public function capitulos()
    {
        return $this->hasManyThrough(Capitulo::class, Temporada::class);
    }
}
