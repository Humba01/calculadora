<?php

namespace Modelo\Model;

class Cosseno
{
    public function fazCosseno()
    {
        echo 'Insira o angulo do cosseno:' . PHP_EOL;
        $cosseno = floatval(fgets(STDIN));

        $resultado = cos($cosseno);

        echo "O resultado é: $resultado";
    }
}
