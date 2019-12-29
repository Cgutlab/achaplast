<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = "categorias";
    protected $fillable = [
        'titulo_es',
        'titulo_en',
        'titulo_br',
        'imagen', 'ruta', 'orden'
    ];

    public function producto()
    {
      return $this->hasMany('App\Producto');
    }
}