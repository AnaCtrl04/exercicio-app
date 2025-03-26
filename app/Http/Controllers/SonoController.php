<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SonoController extends Controller
{
    public function sono()
    {
        return view('sono.index');
    }

    public function calcularSono(Request $request)
    {
        $horasSono = $request->horas;
        $qualidadeSono = $horasSono >= 7 ? "Bom" : "Insuficiente";

        return view('sono.resultado', compact('horasSono', 'qualidadeSono'));
    }
}

