<?php

namespace Modelo\Model;

class Seno
{
    public function fazSeno()
    {
        echo 'Insira o angulo do seno:' . PHP_EOL;
        $seno  = floatval(fgets(STDIN));

        $resultado = sin($seno);

        echo "O resultado é: $resultado";
    }
}
