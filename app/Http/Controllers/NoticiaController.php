<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NoticiaController extends Controller
{
    public function index()
    {
        $noticias = Noticia::latest()->paginate(10);
        return view('noticias.index', compact('noticias'));
    }

    public function create()
    {
        return view('noticias.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|max:255',
            'resumen' => 'required',
            'contenido' => 'required',
            'categoria' => 'required',
            'imagen' => 'required|image', //|dimensions:width=580,height=410
            'tiempo_lectura' => 'required|integer|min:1',
            'fecha_publicacion' => 'required|date',
            'destacada' => 'boolean'
        ]);

        $imagenPath = $request->file('imagen')->store('noticias', 'public');

        Noticia::create([
            'titulo' => $request->titulo,
            'resumen' => $request->resumen,
            'contenido' => $request->contenido,
            'categoria' => $request->categoria,
            'imagen' => $imagenPath,
            'tiempo_lectura' => $request->tiempo_lectura,
            'fecha_publicacion' => $request->fecha_publicacion,
            'destacada' => $request->destacada ?? false
        ]);

        return redirect()->route('noticias.index')->with('success', 'Noticia creada correctamente');
    }

    public function edit(Noticia $noticia)
    {
        return view('noticias.create', compact('noticia'));
    }

    public function update(Request $request, Noticia $noticia)
    {
        $request->validate([
            'titulo' => 'required|max:255',
            'resumen' => 'required',
            'contenido' => 'required',
            'categoria' => 'required',
            'imagen' => 'nullable|image|dimensions:width=580,height=410',
            'tiempo_lectura' => 'required|integer|min:1',
            'fecha_publicacion' => 'required|date',
            'destacada' => 'boolean'
        ]);

        if ($request->hasFile('imagen')) {
            Storage::delete('public/'.$noticia->imagen);
            $imagenPath = $request->file('imagen')->store('noticias', 'public');
            $noticia->imagen = $imagenPath;
        }

        $noticia->update($request->except('imagen'));

        return redirect()->route('noticias.index')->with('success', 'Noticia actualizada correctamente');
    }

    public function destroy(Noticia $noticia)
    {
        Storage::delete('public/'.$noticia->imagen);
        $noticia->delete();
        return back()->with('success', 'Noticia eliminada correctamente');
    }
}
