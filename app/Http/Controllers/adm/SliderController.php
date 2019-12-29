<?php

namespace App\Http\Controllers\adm;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SliderRequest;
use App\Extensions\Helpers;
use Laracasts\Flash\Flash;
use App\Slider;
use Redirect;

class SliderController extends Controller
{
    

    public function store(SliderRequest $request)
    {
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('imagen'), 'sliders');
        $file_save ? $datos['imagen'] = $file_save : false;

        Slider::create($datos);
        $success = 'Slider creado correctamente';

        return back()->with('success', $success);
    }

    public function update(SliderRequest $request, $id)
    {
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('imagen'), 'sliders');
        $file_save ? $datos['imagen'] = $file_save : false;

        $slider = Slider::find($id);
        $slider->fill($datos);
        $slider->save();
        $success = 'Slider editado correctamente';
        return back()->with('success', $success);
    }

    public function destroy($id)
    {
        $slider = Slider::find($id);
        $slider->delete();
        $success = 'Slider eliminado correctamente';
        return back()->with('success', $success);
    }

}
