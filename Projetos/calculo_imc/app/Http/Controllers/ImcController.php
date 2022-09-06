<?php

namespace App\Http\Controllers;

use App\Models\CalculodeIMC;
use Illuminate\Http\Request;

class ImcController extends Controller
{
    public function index() {
        return view('formulario');
    }

    public function imc() {
        $calculodeIMC = new CalculodeIMC();

        $val = $calculodeIMC->calcularimc();

        return view('resultado', ['val'=>$val]);
    }
}
