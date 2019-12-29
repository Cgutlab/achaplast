<?php

namespace App\Http\Controllers\adm;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Extensions\Helpers;
use Laracasts\Flash\Flash;
use App\Cuenta;
use Redirect;

class ClienteController extends Controller
{
    function showCliente(){
        $clientes = Cuenta::all();
        $active='cliente';
        return view('adm.cliente.editarClientes', compact('clientes','active'));
    }

    public function destroyCliente($id)
    {
        $cliente = Cuenta::find($id);
        $cliente->delete();
        $success = 'Cliente eliminado correctamente';
        return back()->with('success',$success);
    }
}