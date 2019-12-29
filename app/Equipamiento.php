<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipamiento extends Model
{
     protected $fillable = [
        'titulo', 'imagen', 'texto', 'orden',
    ];
}
