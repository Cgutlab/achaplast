<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Descarga extends Model
{
    protected $fillable = [
        'titulo','subtitulo', 'texto', 'imagen','orden',
    ];
}
