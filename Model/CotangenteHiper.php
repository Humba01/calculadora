<?php

namespace Modelo\Model;

class CotangenteHiper
{
    public function fazCotangenteHiper()
    {
        echo 'Insira o angulo da cotangente hiperbolica:' . PHP_EOL;
        $cotangenteHiper = floatval(fgets(STDIN));

        $resultado = 1 / tanh($cotangenteHiper);

        echo "O Resultado é: $resultado";
    }
}
