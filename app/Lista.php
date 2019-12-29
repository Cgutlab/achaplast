<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{
    protected $table = "listas";
    protected $fillable = [
        'titulo', 'descripcion', 'descripcion2', 'ficha', 'orden'
    ];
}
