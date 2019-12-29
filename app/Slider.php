<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
     protected $fillable = [
        'titulo_es', 'subtitulo_es',
        'titulo_en', 'subtitulo_en',
        'titulo_br', 'subtitulo_br',
        'imagen', 'orden',
    ];
}