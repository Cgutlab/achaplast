<?php



namespace App\Http\Controllers\page;



use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Categoria;

use App\Metadato;

/* CategoriasController */

class AchaplastsController extends Controller

{

    public function index()

    {

      $categorias = Categoria::orderBy('orden','asc')->get();

      $active='achaplasts';

            $metadatos = Metadato::where('seccion','categorias')->get();

         return view('page.categorias', compact('metadatos','categorias','active'));

    }



    public function cates()

    {

      $categorias = Categoria::all();    

      $active='achaplasts';

            $metadatos = Metadato::where('seccion','categorias')->get();



         return view('page.categorias', compact('metadatos','categorias','active'));

    }



    public function filter($id)

    {        

      $kategorias = Categoria::orderBy('orden','asc')->get();

      $kategorys = Categoria::orderBy('orden','asc')->where('id', $id)->get();

      $categorias = Categoria::orderBy('orden','asc')->get();     

      $active='achaplasts';

      

            $metadatos = Metadato::where('seccion','categorias')->get();

        return view('page.categorias', compact('metadatos','categorias','kategorias','kategorys','active'));

    }    







    public function buscar(Request $request)

    {

      $active='achaplasts';

        $buscar = $request->buscar;

            $metadatos = Metadato::where('seccion','categorias')->get();



        $kategorias = Categoria::orderBy('orden','asc')->get();

        $kategorys = Categoria::orderBy('orden','asc')->get();



        $categorias = Categoria::where('titulo',$buscar)->orWhere('titulo','like','%'.$buscar.'%')->get();   



        if(count($categorias)== 0){

          $categorias = Categoria::where('breve',$buscar)->orWhere('breve','like','%'.$buscar.'%')->get();  

        }



        return view('page.categorias', compact('metadatos','categorias','kategorias','kategorys','active'));

    }

    

}