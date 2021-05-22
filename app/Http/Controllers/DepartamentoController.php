<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamentos;

class DepartamentoController extends Controller
{
    Public function graphic(){
        $departamentos = Departamentos::where('estado', 1)->get();
        return view('admin/departamento/graphic')->with('departamentos', $departamentos);
    }
}
