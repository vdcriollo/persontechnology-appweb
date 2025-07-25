<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function quienesSomos()
    {
        
        return view('empresa.quienes-somos', );
    }

    public function misionVision()  {
      
        return view('empresa.mision-vision');
    }

    public function nuestroEquipo() {
        return view('empresa.equipo');
    }
    public function nuestroProcesoTrabajo() {
        return view('empresa.proceso-trabajo');
    }



    // servicios    

    public function desarrolloWeb()  {
         return view('servicios.desarrollo-web');
    }
    public function aplicacionesMobiles()  {
         return view('servicios.aplicaciones-mobiles');
    }
    public function desarrolloFullStack()  {
        return view('servicios.desarrollo-full-stack');
    }
    public function solucionesIoT()  {
        return view('servicios.soluciones-iot');
    }
    public function academiaFullStack()  {
        return view('servicios.academia-full-stack');
    }
    public function soporteTecnico()  {
        return view('servicios.soporte-tecnico');
    }
    
    
    
    
    
}
