<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Homecliente;
use App\Destacado;
use App\Contenido;
use App\Slider;
use App\Red;
use App\Metadato;

class HomeController extends Controller
{
    public function index(){
    	$sliders = Slider::orderBy('orden','asc')->get();
    	$destacados = Destacado::orderBy('orden','asc')->get();
    	$contenidos = Contenido::all();
    	$metadatos = Metadato::where('seccion','home')->get();
      $active='home';
        return view('page.home', compact('metadatos','sliders','destacados','contenidos', 'active'));
    }
}
