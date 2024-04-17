<?php

// Modelo Serie
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;

    // Si la tabla no sigue la convención de nombres de Laravel, puedes especificarla aquí
    // protected $table = 'nombre_de_tabla';

    /**
     * Define la relación de existencia con el modelo Capitulo.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function capitulos()
    {
        return $this->hasMany(Capitulo::class);
    }
}
