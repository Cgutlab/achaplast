<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Metadato;
use App\Novedad;

class NovedadController extends Controller
{
    public function index()
    {    	
    	$metadatos = Metadato::where('seccion','novedad')->get();
    	$novedades = Novedad::orderBy('order', 'asc')->get();
    	$active = 'novedades';
    	return view('page.novedades',compact('metadatos', 'active', 'novedades'));
    }

    public function novedad($id)
    {
    	$novedad = Novedad::find($id);        
        $metadatos = Metadato::where('seccion','novedad')->get();
    	$active = 'novedades';
    	return view('page.novedad',compact('metadatos', 'active', 'novedad'));
    }
}
