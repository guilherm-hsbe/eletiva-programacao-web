<?php

namespace App\Http\Controllers;

use App\Models\CalculodeCombustivel;
use Illuminate\Http\Request;

class CombustivelController extends Controller
{
    public function index() {
        return view('consumo');
    }

    public function gasto() {
        $calculoDeCombustivel = new CalculodeCombustivel();

        $valor = $calculoDeCombustivel->calcular();

        return view('resultado', ['valor'=>$valor]);
    }
}
