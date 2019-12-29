<?php

namespace App\Http\Controllers\adm;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Extensions\Helpers;
use Laracasts\Flash\Flash;
use App\Novedad;
use App\Banner;
use Redirect;

class NovedadController extends Controller
{
    public function create(){
        $usuario = Auth::user();
        $novedades_seccion = 'active';
        $novedad_create = 'active';
        return view('adm.novedad.crearNovedad',  compact('usuario', 'novedades_seccion', 'novedad_create'));
    }

    public function store(Request $request)
    {
        $datos = $request->all();

       	$file_save = Helpers::saveImage($request->file('image'), 'novedades');
        $file_save ? $datos['image'] = $file_save : false;

        $file_save = Helpers::saveImage($request->file('route'), 'novedades');
        $file_save ? $datos['route'] = $file_save : false;

        Novedad::create($datos);
        $success = 'Novedad creada correctamente';

        return back()->with('success', $success);
    }

    public function show(){
        $usuario = Auth::user();
        $novedades = Novedad::orderBy('order', 'ASC')->get();
        $novedades_seccion = 'active';
        $novedad_edit = 'active';

        return view('adm.novedad.editarNovedades',  compact('novedades', 'usuario', 'novedades_seccion', 'novedad_edit'));
    }

    public function edit($id)
    {
        $novedad = Novedad::find($id);
        $usuario = Auth::user();
        $novedades_seccion = 'active';
        $novedades_edit = 'active';
        return view('adm.novedad.editarNovedad', compact('novedad','usuario','novedades_seccion','novedades_edit'));
    }

    public function update(Request $request, $id)
    {
    	$novedad = Novedad::find($id);
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('image'), 'novedades');
        $file_save ? $datos['image'] = $file_save : false;

        $file_save = Helpers::saveImage($request->file('route'), 'novedades');
        $file_save ? $datos['route'] = $file_save : false;
       
        $novedad->fill($datos);
        $novedad->save();
        $success = 'Novedad editada correctamente';
        return back()->with('success', $success);
    }

    public function destroy($id)
    {
        $novedad = Novedad::find($id);
        $novedad->delete();
        $success = 'Novedad eliminada correctamente';
        return back()->with('success', $success);
    }

    public function editarBanner(){
        $usuario = Auth::user();
        $banner = Banner::where('section', 'novedad')->first();
        $banners_seccion = 'active';
        $banner_edit = 'active';

        return view('adm.banner.editarBanner',  compact('usuario', 'banner', 'banners_seccion', 'banner_edit'));
    }
}
