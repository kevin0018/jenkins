<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Capitulo extends Model
{
    protected $fillable = ['nombre_capitulo', 'numero_temporada', 'numero_episodio', 'link', 'duracion'];


    public function serie()
    {
        return $this->belongsTo(Serie::class);
    }

    public function temporada()
    {
        return $this->belongsTo(Temporada::class, 'temporada_id');
    }
}


