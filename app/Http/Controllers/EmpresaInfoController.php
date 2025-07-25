<?php

namespace App\Http\Controllers;

use App\Models\EmpresaInfo;
use Illuminate\Http\Request;

class EmpresaInfoController extends Controller
{
    public function update(Request $request)
    {
        $empresa = EmpresaInfo::firstOrFail();
        
        $validated = $request->validate([
            'nombre_empresa' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
            'correo' => 'required|email|max:255',
            'sitio_web' => 'nullable|url|max:255',
            'direccion' => 'nullable|string',
            'enlace_whatsapp' => 'nullable|url|max:255',
            'enlace_facebook' => 'nullable|url|max:255',
            'enlace_instagram' => 'nullable|url|max:255',
            'enlace_youtube' => 'nullable|url|max:255',
            'enlace_github' => 'nullable|url|max:255',
            'enlace_tiktok' => 'nullable|url|max:255',
        ]);

        $empresa->update($validated);

        return redirect()->route('dashboard')
            ->with('success', 'Información de la empresa actualizada correctamente');
    }
}
