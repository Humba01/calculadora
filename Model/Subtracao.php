<?php

namespace Modelo\Model;

class Subtracao
{
    public function fazSubtracao()
    {
        echo 'Insira o valor na qual subtrairemos:' . PHP_EOL;
        $valorSub = floatval(fgets(STDIN));

        echo "Insira a quantidade de valores que vamos retirar de $valorSub:" . PHP_EOL;
        $qtdDeVezes = intval(fgets(STDIN));

        for ($i = 1; $i <= $qtdDeVezes; $i++) {

            $valorSub;

            echo 'Insira o valor para subtrair:' . PHP_EOL;

            $valor = floatval(fgets(STDIN));

            $valorSub = $valorSub - $valor;
        }
        echo "O resultado é: $valorSub";
    }
}
