<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeCliente extends Model
{
     protected $fillable = [
        'imagen', 'titulo', 'orden',
    ];
}
