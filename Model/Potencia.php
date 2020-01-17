<?php

namespace Modelo\Model;

class Potencia
{
    public function fazPotencia()
    {
        echo 'Insira a base da potencia:' . PHP_EOL;
        $base = floatval(fgets(STDIN));

        echo 'Insira a potenciacao:' . PHP_EOL;
        $potencia = floatval(fgets(STDIN));

        $resultado = $base ** $potencia;

        echo "O resultado é: $resultado";
    }
}
