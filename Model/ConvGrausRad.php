<?php

namespace Modelo\Model;

class ConvGrausRad
{
    public function fazConvGrausRad()
    {
        echo 'Insira o valor em graus:' . PHP_EOL;
        $graus = floatval(fgets(STDIN));

        $conversor = deg2rad($graus);

        echo "O valor em radianos é: $conversor";
    }
}
