<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\EmpresaInfoController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// enviar contacto post contactoController
Route::post('/enviar-contacto', [ContactoController::class, 'enviar'])->name('contacto.enviar');



 Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::put('/empresa/update', [EmpresaInfoController::class, 'update'])->name('empresa.update');


Route::prefix('empresa')->group(function () {
    // Ruta para "Quiénes Somos"
    Route::get('quienes-somos', [EmpresaController::class, 'quienesSomos'])->name('empresa.quienes-somos');

    // Ruta para "Misión y Visión"
    Route::get('mision-y-vision', [EmpresaController::class, 'misionVision'])->name('empresa.mision-vision');
    // Ruta para "Misión y Visión"
    Route::get('nuestro-equipo', [EmpresaController::class, 'nuestroEquipo'])->name('empresa.nuestro-equipo');
    Route::get('nuestro-proceso-trabajo', [EmpresaController::class, 'nuestroProcesoTrabajo'])->name('empresa.nuestro-proceso-trabajo');

    
});
Route::prefix('servicios')->group(function () {
    
    Route::get('desarrollo-web', [EmpresaController::class, 'desarrolloWeb'])->name('servicios.desarrollo-web');

    Route::get('aplicaciones-mobiles', [EmpresaController::class, 'aplicacionesMobiles'])->name('servicios.aplicaciones-mobiles');
    Route::get('desarrollo-full-stack', [EmpresaController::class, 'desarrolloFullStack'])->name('servicios.desarrollo-full-stack');
    Route::get('soluciones-iot', [EmpresaController::class, 'solucionesIoT'])->name('servicios.soluciones-iot');
    Route::get('academia-full-stack', [EmpresaController::class, 'academiaFullStack'])->name('servicios.academia-full-stack');
    
    Route::get('soporte-tecnico', [EmpresaController::class, 'soporteTecnico'])->name('servicios.soporte-tecnico');
  

    
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // noticias
    Route::resource('noticias', NoticiaController::class)->except(['show']);

});

require __DIR__.'/auth.php';
