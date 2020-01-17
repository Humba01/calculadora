<?php

namespace Modelo\Model;

class Soma
{
    protected float $qtdDeVezes;
    protected float $valor;
    protected float $resultado;

    public function fazSoma()
    {
        echo 'Quantos valores deseja somar?' . PHP_EOL;
        $qtdDeVezes = intval(fgets(STDIN));

        $resultado = 0.0;

        for ($i = 1; $i <= $qtdDeVezes; $i++) {
            echo 'Insira o valor para somar' . PHP_EOL;

            $valor = floatval(fgets(STDIN));

            $resultado = $valor  + $resultado;
        }
        echo "O resultado é: $resultado";
    }
}
