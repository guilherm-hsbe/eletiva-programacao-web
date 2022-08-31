<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalculodeIMC extends Model
{
    public function calcular() {
        $altura = $_GET['altura'];
        $peso = $_GET['peso'];

        $imc_valor = $peso/$altura;
        $imc_class = "";

        //Classificação: Magreza
        if ($imc_valor < 18.5)
        return $imc_class = "MAGREZA";

        elseif ($imc_valor >= 18.5 && $imc_valor <= 24.9)
            echo "NORMAL";

        elseif ($imc_valor >= 25.0 && $imc_valor <= 29.9)
            echo "SOBREPESO (OBESIDADE: GRAU I)";

        elseif ($imc_valor >= 30.0 && $imc_valor <= 39.9)
            echo "OBESIDADE (OBESIDADE: GRAU II)";

        else
            echo "OBESIDADE GRAVE (OBESIDADE: GRAU III)";
    } 
}
