<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solucion extends Model
{
    protected $table = "soluciones";
    protected $fillable = [
        'titulo_es', 'descripcion_es',
        'titulo_en', 'descripcion_en',
        'titulo_br', 'descripcion_br',
         'imagen'
    ];
}
