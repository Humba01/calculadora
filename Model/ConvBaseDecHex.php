<?php

namespace Modelo\Model;

class ConvBaseDecHex
{
    public function fazConvBaseDecHex()
    {
        echo 'Insira o valor em base decimal:' . PHP_EOL;
        $decimal = intval(fgets(STDIN));

        $conversor = dechex($decimal);

        echo "O Numero é: $conversor" . PHP_EOL;
    }
}
