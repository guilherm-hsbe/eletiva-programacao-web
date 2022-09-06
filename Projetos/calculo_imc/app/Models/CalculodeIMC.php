<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalculodeIMC extends Model
{
    public function calcularimc() {
        $altura = $_GET['altura'];
        $peso = $_GET['peso'];

        $imc_valor = number_format($peso/($altura*$altura), 2, '.', '');
        $imc_class = "";    

        //Classificação: Magreza
        if ($imc_valor < 18.5){
            $imc_class = "MAGREZA";
        }

        elseif ($imc_valor >= 18.5 && $imc_valor <= 24.9){
            $imc_class = "NORMAL";
        }

        elseif ($imc_valor >= 25.0 && $imc_valor <= 29.9){
            $imc_class = "SOBREPESO - GRAU I";
        }

        elseif ($imc_valor >= 30.0 && $imc_valor <= 39.9){
            $imc_class = "OBESIDADE - GRAU II";
        }

        else{
            $imc_class = "OBESIDADE GRAVE - GRAU III";
        }

        $array = [$imc_valor,$imc_class];
        return $array;
    } 
}
