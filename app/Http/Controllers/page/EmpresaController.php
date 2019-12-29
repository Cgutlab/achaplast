<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Empresa;
use App\Metadato;

class EmpresaController extends Controller
{
    public function index(){
    	
    	$empresa = Empresa::find(1);
      $active='empresa';
          	$metadatos = Metadato::where('seccion','empresa')->get();
    	 return view('page.empresa', compact('metadatos','empresa','active'));
    }
}
