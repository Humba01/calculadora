<?php

namespace Modelo\Model;

class Divisao
{
    public function fazDivisao()
    {
        echo 'Insira o valor na qual dividiremos:' . PHP_EOL;
        $valorDiv = floatval(fgets(STDIN));

        echo "Insira a quantidade de valores que vamos dividir de $valorDiv:" . PHP_EOL;
        $qtdDeVezes = intval(fgets(STDIN));

        for ($i = 1; $i <= $qtdDeVezes; $i++) {

            $valorDiv;

            echo 'Insira o valor para dividir:' . PHP_EOL;

            $valor = floatval(fgets(STDIN));

            $valorDiv = $valorDiv - $valor;
        }
        echo "O resultado é: $valorDiv";
    }
}
