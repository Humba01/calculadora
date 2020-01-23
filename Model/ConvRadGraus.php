<?php

namespace Modelo\Model;

class ConvRadGraus
{
    public function fazConvRadGraus()
    {
        echo 'Insira o valor em radianos:' . PHP_EOL;
        $radianos = floatval(fgets(STDIN));

        $conversor = rad2deg($radianos);

        echo "O valor em graus é: $conversor";
    }
}
