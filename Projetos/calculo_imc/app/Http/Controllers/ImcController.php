<?php

namespace App\Http\Controllers;

use App\Models\CalculodeIMC;
use Illuminate\Http\Request;

class ImcController extends Controller
{
    public function index() {
        return view('imc');
    }

    public function calculo() {
        $calculodeIMC = new CalculodeIMC();

        $val = $calculodeIMC->calcular();

        return view('resultado', ['val'=>$val]);
    }
}
