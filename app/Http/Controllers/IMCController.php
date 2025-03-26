<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IMCController extends Controller
{
    public function imc()
    {
        return view('imc.index');
    }

    public function calcularIMC(Request $request)
    {
        $altura = $request->altura;
        $peso = $request->peso;

        $imc = $peso / ($altura * $altura);
        $resultado = $this->classificarIMC($imc);

        return view('imc.resultado', compact('imc', 'resultado'));
    }

    private function classificarIMC($imc)
    {
        if ($imc < 18.5) return "Abaixo do peso";
        if ($imc < 24.9) return "Peso normal";
        if ($imc < 29.9) return "Sobrepeso";
        return "Obesidade";
    }
}
