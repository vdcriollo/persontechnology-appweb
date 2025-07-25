<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $fillable = [
        'nombre_completo',
        'telefono_whatsapp',
        'correo_electronico',
        'asunto',
        'interes',
        'mensaje',
    ];

}
