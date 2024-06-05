<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $table = 'actor';
    use HasFactory;

    public function media()
    {
        return $this->belongsToMany(Media::class, 'reparto');
    }
}
