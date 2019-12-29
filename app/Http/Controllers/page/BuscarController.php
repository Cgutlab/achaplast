<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Producto;
use App\Metadato;

class BuscarController extends Controller
{
    public function index() {
        $busca=0;
      $metadatos = Metadato::where('seccion','buscar')->get();
      $active = 'busca';
        return view('page.buscar', compact('metadatos','active','busca'));
    }

    public function getProducts (Request $request) {
        $busqueda = $request->busqueda;
        $busca=1;
        $metadatos = Metadato::where('seccion','buscar')->get();
        $active = 'busca';
        $productos = Producto::where('titulo_es', 'like', '%' . $busqueda . '%')->orwhere('titulo_en', 'like', '%' . $busqueda . '%')->orwhere('titulo_br', 'like', '%' . $busqueda . '%')->
        orwhere('breve_es', 'like', '%' . $busqueda . '%')->orwhere('breve_en', 'like', '%' . $busqueda . '%')->orwhere('breve_br', 'like', '%' . $busqueda . '%')->
        orwhere('texto1_es', 'like', '%' . $busqueda . '%')->orwhere('texto1_en', 'like', '%' . $busqueda . '%')->orwhere('texto1_br', 'like', '%' . $busqueda . '%')->get();
        return view('page.buscar', compact('productos','busqueda','busca','metadatos','active'));
    }
}
