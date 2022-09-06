<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalculodeIMC extends Model
{
    public function calcularimc() {
        $altura = $_GET['altura'];
        $peso = $_GET['peso'];

        $imc_valor = $peso/($altura*$altura);
        $imc_class = "";

        //Classificação: Magreza
        if ($imc_valor < 18.5){
            $imc_class = "MAGREZA";
            return $imc_class;
        }

        elseif ($imc_valor >= 18.5 && $imc_valor <= 24.9){
            $imc_class = "NORMAL";
            return $imc_class;
        }

        elseif ($imc_valor >= 25.0 && $imc_valor <= 29.9){
            $imc_class = "SOBREPESO (OBESIDADE: GRAU I)";
            return $imc_class;
        }

        elseif ($imc_valor >= 30.0 && $imc_valor <= 39.9){
            $imc_class = "OBESIDADE (OBESIDADE: GRAU II)";
            return $imc_class;
        }

        else{
            $imc_class = "OBESIDADE GRAVE (OBESIDADE: GRAU III)";
            return $imc_class;
        }
    } 
}
