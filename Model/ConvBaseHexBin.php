<?php

namespace Modelo\Model;

class ConvBaseHexBin
{
    public function fazConvBaseHexBin()
    {
        echo 'Insira o valor em base hexadecimal:' . PHP_EOL;
        $hexadecimal = intval(fgets(STDIN));

        $conversor = hex2bin($hexadecimal);

        echo "O Numero é: $conversor" . PHP_EOL;
    }
}
