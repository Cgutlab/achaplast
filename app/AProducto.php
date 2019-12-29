<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AProducto extends Model
{
    protected $table = "aproductos";
    protected $fillable = [
    	'titulo', 'breve', 'resena', 'texto1', 'texto2', 'ficha', 'imagen', 'id_categoria', 'orden'
    ];

    public function categoria()
    {
      return $this->belongsTo('App\ACategoria', 'id_categoria');
    }
}