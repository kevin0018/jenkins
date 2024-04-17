<?php

// Modelo Capitulo corregido
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capitulo extends Model
{
    use HasFactory;

    protected $table = 'capitulo';

    /**
     * Define la relación de existencia con el modelo Serie.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function serie()
    {
        return $this->belongsTo(Serie::class);
    }
}

