<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    protected $table = "galerias";
    protected $fillable = [
    	'imagen', 'ruta', 'orden', 'id_producto'
    ];

    public function producto()
    {
    	return $this->belongsTo('App\Producto', 'id_producto');
    }   
}