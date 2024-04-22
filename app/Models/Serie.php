<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    protected $fillable = ['nombre', 'genero', 'numero_temporadas', 'sinopsis', 'caratula'];

    public function temporadas()
    {
        return $this->hasMany(Temporada::class);
    }
}
