<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    public function index(){
    $clientes = Cliente::all();
    $active='cliente';
    return view('page.cliente', compact('clientes','active'));
	}
}
