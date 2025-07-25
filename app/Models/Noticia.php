<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Noticia extends Model
{
    // app/Models/Noticia.php
    protected $fillable = [
        'titulo', 'slug', 'resumen', 'contenido', 
        'categoria', 'imagen', 'tiempo_lectura', 
        'fecha_publicacion', 'destacada'
    ];

    // Generar slug automáticamente
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($noticia) {
            $noticia->slug = Str::slug($noticia->titulo);
        });
        static::updating(function ($noticia) {
            $noticia->slug = Str::slug($noticia->titulo);
        });
    }

    // En app/Models/Noticia.php
    public function getFechaFormateadaAttribute()
    {
         
        return Carbon::parse($this->fecha_publicacion)->isoFormat('D [de] MMMM, Y');

    }

}
