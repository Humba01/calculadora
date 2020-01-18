<?php

namespace Modelo\Model;

class RaizQuadrada
{
    public function fazRaizQuadrada()
    {
        echo 'Insira o valor do numero que deseja saber a raiz:' . PHP_EOL;
        $valor = floatval(fgets(STDIN));

        $resultado = sqrt($valor);

        echo "O resultado é: $resultado";
    }
}
