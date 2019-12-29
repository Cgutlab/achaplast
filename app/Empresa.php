<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = [
        'titulo_es', 'texto_es',
        'titulo_en', 'texto_en',
        'titulo_br', 'texto_br',
        'imagen','imagen2',
    ];
}
