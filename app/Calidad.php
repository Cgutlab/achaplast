<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calidad extends Model
{
    protected $table = "calidades";
    protected $fillable = [
        'titulo', 'descripcion', 'imagen', 'ruta', 'orden'
    ];
}
