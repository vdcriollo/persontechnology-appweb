<?php

namespace App\Http\Controllers;

use App\Mail\ContactoRecibido;
use App\Models\Contacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function enviar(Request $request)
    {
         $datos = $request->validate([
            'nombre_completo'     => 'required|string|max:255',
            'telefono_whatsapp'   => 'required|string|max:20',
            'correo_electronico'  => 'required|email|max:255',
            'asunto'              => 'required|string|max:255',
            'interes'             => 'required|in:web,app,iot,fullstack,soporte,otros',
            'mensaje'             => 'required|string|max:2000',
        ]);

        // 1. Guardar en base de datos
        $contacto = Contacto::create($datos);

        // 2. Enviar al administrador
        Mail::to('persontechnologys@gmail.com')->send(new ContactoRecibido($contacto));

        // 3. Enviar copia al usuario (opcional, puedes hacer esto condicional si deseas)
        Mail::to($contacto->correo_electronico)->send(new ContactoRecibido($contacto,true));

        return back()->with('success', 'Tu mensaje ha sido enviado correctamente. Revisa tu correo para una copia.');
    }

    public function index()
    {
        return view('contacto.index');
    }   
}
