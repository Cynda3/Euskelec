<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\message;
use Illuminate\Support\Facades\Input;

use App\Http\Controllers\Controller;

class messagedb extends Controller
{
    public function guardar(Request $request){
    	// Guarda los datos del formulario

        $msg = new message;
        $msg->nombre = Input::get('nombre');
        $msg->email = Input::get('email');
        $msg->mensaje = Input::get('mensaje');

        $msg->save();
        return view('index')->with('alert', 'Enviado!');

    }
}
