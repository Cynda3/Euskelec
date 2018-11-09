<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class messagedb extends Controller
{
    public function guardar(Request $request){
    	// Guarda los datos del formulario

        $msg = new Message;
        $msg->nombre = $request->input('nombre');
        $msg->email = str_random(10).'@gmail.com';
        $msg->mensaje = 'ESto es un mensaje';

    }
}
