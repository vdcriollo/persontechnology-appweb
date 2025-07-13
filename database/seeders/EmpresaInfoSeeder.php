<?php

namespace Database\Seeders;

use App\Models\EmpresaInfo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmpresaInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EmpresaInfo::create([
            'nombre_empresa' => 'Person Technology',
            'telefono' => '+593998808775',
            'correo' => 'info@persontechnology.net',
            'sitio_web' => 'https://persontechnology.net',
            'direccion' => 'Av. 9 de Octubre y 24 de Mayo, frente a CACPECO, Salcedo‑Cotopaxi, Ecuador',
            'enlace_whatsapp' => 'https://wa.me/message/P6E77NRUVOC3A1',
            'enlace_facebook' => 'https://www.facebook.com/persontechnology',
            'enlace_instagram' => 'https://www.instagram.com/persontechnology/?hl=es-la',
            'enlace_youtube' => 'https://www.youtube.com/channel/UCTQWC6Ms6a2G0GLNQHcjWtg',
            'enlace_github' => 'https://github.com/persontechnology',
            'enlace_tiktok' => 'https://www.tiktok.com/@persontechnology?lang=es',
        ]);
    }
}
