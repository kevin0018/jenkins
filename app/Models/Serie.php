<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    

    protected $fillable = ['nombre', 'genero', 'numero_temporadas', 'sinopsis', 'duracion_total', 'caratula'];
    public function capitulos()
    {
        return $this->hasMany(Capitulo::class);
    }
}
