<?php

namespace App\Http\Controllers\adm;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Extensions\Helpers;
use Laracasts\Flash\Flash;
use App\HomeCliente;
use App\Contenido;
use App\Destacado;
use App\Slider;
use Redirect;

use App\Producto;

class HomeController extends Controller
{
    function crearSlider(){
        $usuario = Auth::user();
        $home_slider_create = 'active';
        
        return view('adm.home.crearSlider',  compact('usuario','destacados_seccion','home_slider_create'));
    }

    function editarSliders(){
        $usuario = Auth::user();
        $sliders = Slider::all();
        $destacados_seccion = 'active';
        $home_slider_edit = 'active';

        return view('adm.home.editarSliders',  compact('usuario', 'sliders','destacados_seccion','home_slider_edit'));
    }

    function editarSlider($id){
        $usuario = Auth::user();
        $slider = Slider::find($id);
        $destacados_seccion = 'active';
        $home_slider_edit = 'active';

        return view('adm.home.editarSlider',  compact('usuario', 'slider','destacados_seccion','home_slider_edit'));
    }

    function editarDestacados(){
        $usuario = Auth::user();
        $destacados = Destacado::all();
        $destacados_seccion = 'active';
        $destacados_edit = 'active';

        return view('adm.home.editarDestacados',  compact('usuario', 'destacados','destacados_edit','destacados_seccion'));
    }

    function editarDestacado($id){
        $usuario = Auth::user();
        $destacado = Destacado::find($id);
        $destacados_seccion = 'active';
        $destacados_edit = 'active';

        $productos = Producto::all();

        return view('adm.home.editarDestacado',  compact('productos','usuario','destacado','destacados_edit','destacados_seccion'));
    }

    function updateDestacado(Request $request, $id){
        $datos = $request->all();
        $destacado = Destacado::find($id);

        $file_save = Helpers::saveImage($request->file('imagen'), 'destacados');
        $file_save ? $datos['imagen'] = $file_save : false;

        $destacado->fill($datos);
        $destacado->save();
        $success = 'Destacado editado correctamente';
        return back()->with('success', $success);
    }

    function editarClientes(){
        $usuario = Auth::user();
        $clientes = HomeCliente::all();
        $clientes_seccion = 'active';
        $clientes_edit = 'active';

        return view('adm.home.editarClientes',  compact('usuario', 'clientes','clientes_edit','clientes_seccion'));
    }

    function editarCliente($id){
        $usuario = Auth::user();
        $cliente = HomeCliente::find($id);
        $clientes_seccion = 'active';
        $clientes_edit = 'active';

        return view('adm.home.editarCliente',  compact('usuario','cliente','clientes_edit','clientes_seccion'));
    }

    function updateCliente(Request $request, $id){
        $datos = $request->all();
        $cliente = HomeCliente::find($id);

        $file_save = Helpers::saveImage($request->file('imagen'), 'homeclientes');
        $file_save ? $datos['imagen'] = $file_save : false;

        $cliente->fill($datos);
        $cliente->save();
        $success = 'Cliente editado correctamente';
        return back()->with('success', $success);
    }

    function editarContenidos(){
        $usuario = Auth::user();
        $contenidos = Contenido::all();
        $contenidos_seccion = 'active';
        $contenidos_edit = 'active';

        return view('adm.home.editarContenidos',  compact('usuario', 'contenidos','contenidos_edit','contenidos_seccion'));
    }

    function editarContenido($id){
        $usuario = Auth::user();
        $contenido = Contenido::find($id);
        $contenidos_seccion = 'active';
        $contenidos_edit = 'active';

        return view('adm.home.editarContenido',  compact('usuario','contenido','contenidos_edit','contenidos_seccion'));
    }

    function updateContenido(Request $request, $id){
        $datos = $request->all();
        $contenido = Contenido::find($id);

        $contenido->fill($datos);
        $contenido->save();
        $success = 'Contenido editado correctamente';
        return back()->with('success', $success);
    }



}