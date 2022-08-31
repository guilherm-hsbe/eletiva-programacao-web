<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimeiroController extends Controller
{
    public function hello() {
        return "Olá Mundo!";
    }
}
