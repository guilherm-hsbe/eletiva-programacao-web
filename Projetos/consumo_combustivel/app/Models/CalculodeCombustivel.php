<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalculodeCombustivel extends Model
{
    public function calcular() {
        $distancia = $_GET['distancia'];
        $autonomia = $_GET['autonomia'];

        $valorGasolina = 4.80;

        $consumoGasolina = ($distancia / $autonomia) * $valorGasolina;

        return $consumoGasolina;
    }
}
