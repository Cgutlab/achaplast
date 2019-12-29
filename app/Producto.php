<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = "productos";
    protected $fillable = [
    	'titulo_es', 'breve_es', 'texto1_es',
    	'titulo_en', 'breve_en', 'texto1_en',
    	'titulo_br', 'breve_br', 'texto1_br',
    	'ficha', 'imagen', 'imagen1', 'imagen2', 'id_categoria', 'orden'
    ];

    public function categoria()
    {
      return $this->belongsTo('App\Categoria', 'id_categoria');
    }
}