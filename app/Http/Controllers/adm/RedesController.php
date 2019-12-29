<?php

namespace App\Http\Controllers\adm;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Extensions\Helpers;
use Illuminate\Http\Request;
use Illuminate\Html;
use App\Red;

class RedesController extends Controller
{
    //
    public function createRedes()
    {
        $usuario = Auth::user();
        $redes_seccion = 'active';
        $redes_create = 'active';

        return view('adm.redes.crearRed', compact('usuario','redes_seccion','redes_create'));
    }

    public function storeRedes(Request $request)
    {
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('imagen'), 'redes');
        $file_save ? $datos['imagen'] = $file_save : false;

        Red::create($datos);
        $success = 'Red creado correctamente';
        return back()->with('success', $success);
    }

    public function showRedes()
    {                
        $usuario = Auth::user();
        $redes = Red::all();
        $redes_seccion = 'active';
        $redes_edit = 'active';
        $redes = Red::paginate(8);

        return view('adm.redes.editarRedes', compact('usuario', 'redes','redes_seccion','redes_edit'));
    }

    public function editRedes($id)
    {
        $red = Red::find($id);
        $usuario = Auth::user();
        $redes_seccion = 'active';
        $redes_edit = 'active';

        return view('adm.redes.editarRed', compact('red','usuario','redes_seccion','redes_edit'));
    }

    public function updateRedes(Request $request, $id)
    {
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('imagen'), 'redes');
        $file_save ? $datos['imagen'] = $file_save : false;

        $red = Red::find($id);
        $red->fill($datos);
        $red->save();
        $success = 'Red editada correctamente';
        return back()->with('success', $success);
    }

    public function destroyRedes($id)
    {
        $red = Red::find($id);
        $red->delete();
        $success = 'Red eliminado correctamente';
        return back()->with('success', $success);
    }
}
