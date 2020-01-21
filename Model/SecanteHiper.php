<?php

namespace Modelo\Model;

class SecanteHiper
{
    public function fazSecanteHiper()
    {
        echo 'Insira o angulo da secante hiperbolica' . PHP_EOL;
        $secanteHiper = floatval(fgets(STDIN));

        $resultado = 1 / cosh($secanteHiper);

        echo "O Resultado é: $resultado";
    }
}
