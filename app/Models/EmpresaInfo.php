<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmpresaInfo extends Model
{
    protected $table = 'empresa_infos';

    protected $fillable = [
        'nombre_empresa',
        'telefono',
        'correo',
        'sitio_web',
        'direccion',
        'enlace_whatsapp',
        'enlace_facebook',
        'enlace_instagram',
        'enlace_youtube',
        'enlace_github',
        'enlace_tiktok',
    ];
}
