<?php

namespace Modelo\Model;

class Cossecante
{
    public function fazCossecante()
    {
        echo 'Insira o angulo da Cossecante:' . PHP_EOL;
        $cossecante = floatval(fgets(STDIN));

        $resultado = 1 / sin($cossecante);

        echo "O resultado é: $resultado";
    }
}
