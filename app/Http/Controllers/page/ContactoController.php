<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\Contacto;
use App\Dato;
use App\Correo;
use App\Metadato;

class ContactoController extends Controller
{
    public function index(){
      $correos = Correo::orderBy('orden','asc')->get();
      $active='contacto';
      $contar=0;
        $metadatos = Metadato::where('seccion','contacto')->get();   
    	return view('page.contacto', compact('metadatos','active','correos','contar'));
    }

    public function enviarMail(Request $request) {
      $datos = Dato::where('tipo', 'correo')->first();

      $nombre = $request->input('nombre');
      $apellido = $request->input('apellido');
      $telefono = $request->input('telefono');
      $email = $request->input('email');
      $empresa = $request->input('empresa');
      $mensaje = $request->input('mensaje');
      $verion = $datos->texto;

      Mail::to($datos->texto)->send(new Contacto($nombre, $apellido, $telefono, $email, $empresa, $mensaje, $verion));

      if (count(Mail::failures()) > 0) {
          $success = 'Ha ocurrido un error al enviar el correo';
      }else{
          $success = 'Correo enviado correctamente';
      }

      return back()->with('success', $success);
    }
}
