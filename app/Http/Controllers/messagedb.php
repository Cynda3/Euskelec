<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\message;

use App\Http\Controllers\Controller;

class messagedb extends Controller
{
    public function guardar(Request $request){
    	// Guarda los datos del formulario

        $msg = new message;
        $msg->nombre = $request->input('nombre');
        $msg->email = $request->input('email');
        $msg->mensaje = $request->input('mensaje');

        $msg->save();

        return view('index');

    }
}
