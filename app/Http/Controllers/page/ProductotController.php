<?php

namespace App\Http\Controllers\page;

use Illuminate\Support\Collection;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;
use App\Metadato;

class ProductotController extends Controller
{
	public function index($id)
  {
    $metadatos = Metadato::where('seccion','productos')->get();    
    $productoI = Producto::where('id',$id)->first();
  	$producto = Producto::where('id',$id)->first();

    $productos = Producto::where('id_categoria',$producto->id_categoria)->orderBy('orden','asc')->get();
    $category  = Categoria::find($producto->id_categoria);
    $categorias = Categoria::orderBy('orden', 'asc')->get();

    $active='achaplasts';
    return view('page.producto', [
      'metadatos' => $metadatos,
      'producto' => $producto,
      'productos' => $productos,
      'category' => $category,
      'productoI' => $productoI,
      'categorias' => $categorias,
      /*'metadato' => $metadato,*/
      'active' => $active
    ]);
  }
}
/*
@foreach($galeriaIs as $gal_princ)
            @if ($gal_princ == reset($galeriaIs )) First Item: @endif
@endforeach
*/