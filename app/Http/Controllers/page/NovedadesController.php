<?php

namespace App\Http\Controllers\page;
/*
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Novedad;
use App\Categoria;
use App\Metadato;
*/
class NovedadesController extends Controller
{
    public function index()
    {
    	$novedades = Novedad::all();  	
    	$categorys = Categoria::orderBy('orden','asc')->get();
    	$categorias = Categoria::orderBy('orden','asc')->get();
      $active='novedades';
         return view('page.novedades', compact('novedades','categorys', 'categorias', 'active'));
    }

    public function filter($id)
    {        
    	$categorias = Categoria::orderBy('orden','asc')->get();
    	$categorys = Categoria::orderBy('orden','asc')->where('id', $id)->get();
 		$novedades = Novedad::orderBy('fecha','asc')->get();     
    $active='novedades';
        return view('page.novedades', compact('novedades','categorias','categorys','active'));
    }    

    public function buscar(Request $request)
    {
      $active='novedades';
        $buscar = $request->buscar;

        $categorias = Categoria::orderBy('orden','asc')->get();
        $categorys = Categoria::orderBy('orden','asc')->get();

        $novedades = Novedad::where('titulo',$buscar)->orWhere('titulo','like','%'.$buscar.'%')->get();   

        if(count($novedades)== 0){
          $novedades = Novedad::where('breve',$buscar)->orWhere('breve','like','%'.$buscar.'%')->get();  
        }

        return view('page.novedades', compact('novedades','categorias','categorys','active'));
    }
    
}