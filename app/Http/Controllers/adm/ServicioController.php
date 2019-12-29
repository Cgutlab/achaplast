<?php

namespace App\Http\Controllers\adm;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Extensions\Helpers;
use App\Servicio;

class ServicioController extends Controller
{
    public function createServicio()
    {
        $usuario = Auth::user();
        $servicios_seccion = 'active';
        $servicios_create = 'active';

        return view('adm.servicios.crearServicio', compact('usuario','servicios_seccion','servicios_create'));
    }

    public function storeServicio(Request $request)
    {
        $obra = new Servicio();
        $obra->titulo       = $request->titulo;
        $obra->texto        = $request->texto;
        $obra->orden        = $request->orden;

        $id = Servicio::all()->max('id');
        $id++;

        if($request->hasFile('imagen'))
        {
            if($request->file('imagen')->isValid())
            {
                $file = $request->file('imagen');
                $path = public_path('imagenes/servicio/');
                $request->file('imagen')->move($path, $id.'_'.$file->getClientOriginalName());

                $obra->imagen = $id.'_'.$file->getClientOriginalName();
            }
        }

        $obra->save();
        $success = 'Lista de precio, creada correctamente';
        return back()->with('success', $success);
    }

    public function showServicio()
    {
        $usuario = Auth::user();
        $servicios = Servicio::all();
        $servicios_seccion = 'active';
        $servicios_edit = 'active';

        return view('adm.servicios.editarServicios', compact('usuario', 'servicios','servicios_seccion','servicios_edit'));
    }

    public function editServicio($id)
    {
        $servicio = Servicio::find($id);
        $usuario = Auth::user();
        $servicios_seccion = 'active';
        $servicios_edit = 'active';

        return view('adm.servicios.editarServicio', compact('servicio','usuario','servicios_seccion','servicios_edit'));
    }

    public function updateServicio(Request $request, $id)
    {
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('imagen'), 'servicio');
        $file_save ? $datos['imagen'] = $file_save : false;

        $servicio = Servicio::find($id);
        $servicio->fill($datos);
        $servicio->save();
        $success = 'Articulo editado correctamente';
        return back()->with('success', $success);
    }

    public function destroyServicio($id)
    {
        $servicio = Servicio::find($id);
        $servicio->delete();
        $success = 'Servicio eliminado correctamente';
        return back()->with('success', $success);
    }
}
