<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViagemController extends Controller
{
    public function viagem()
    {
        return view('viagem.index');
    }

    public function calcularViagem(Request $request)
    {
        $distancia = $request->distancia;
        $consumo = $request->consumo;
        $precoCombustivel = $request->preco;

        $custoViagem = ($distancia / $consumo) * $precoCombustivel;

        return view('viagem.resultado', compact('custoViagem'));
    }
}
