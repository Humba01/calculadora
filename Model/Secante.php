<?php

namespace Modelo\Model;

class Secante
{
    public function fazSecante()
    {
        echo 'Insira o angulo da secante:' . PHP_EOL;
        $secante = floatval(fgets(STDIN));

        $resultado = 1 / cos($secante);

        echo "O resultado é: $resultado";
    }
}
