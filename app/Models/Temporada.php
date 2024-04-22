<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Temporada extends Model
{
    protected $fillable = ['nombre', 'numero_temporada'];

    public function serie()
    {
        return $this->belongsTo(Serie::class);
    }

    public function capitulos()
    {
        return $this->hasMany(Capitulo::class);
    }
}