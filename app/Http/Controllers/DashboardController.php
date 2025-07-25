<?php

namespace App\Http\Controllers;

use App\Models\EmpresaInfo;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $empresa = EmpresaInfo::first(); // Obtiene el primer registro
        return view('dashboard', compact('empresa'));
    }   
}
