<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ACategoria extends Model
{
    protected $table = "acategorias";
    protected $fillable = [
        'titulo', 'imagen', 'ruta', 'orden'
    ];

    public function producto()
    {
      return $this->hasMany('App\AProducto');
    }
}