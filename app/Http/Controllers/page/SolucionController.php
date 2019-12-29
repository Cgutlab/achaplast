<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Solucion;
use App\Metadato;

class MatriceriaController extends Controller
{
    public function index(){
    $matriceria = Solucion::find(1);
    $active='matriceria';
	$metadatos = Metadato::where('seccion','matriceria')->get();   
    return view('page.matriceria', compact('metadatos','matriceria','active'));
  }
}
