<?php

namespace Modelo\Model;

class Multiplicacao
{
    public function fazMultiplicacao()
    {
        echo 'Insira a quantidade de valores na qual multiplicaremos:' . PHP_EOL;
        $qtdDeVezes = intval(fgets(STDIN));

        $resultado = 1.0;

        for ($i = 1; $i <= $qtdDeVezes; $i++) {

            echo 'Insira o valor para multiplicar:' . PHP_EOL;
            $valor = floatval(fgets(STDIN));

            $resultado = $resultado * $valor;
        }
        echo "O resultado é: $resultado" . PHP_EOL;
    }
}
