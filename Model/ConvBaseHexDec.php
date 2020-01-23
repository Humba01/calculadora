<?php

namespace Modelo\Model;

class ConvBaseHexDec
{
    public function fazConvBaseHexDec()
    {
        echo 'Insira o valor em base hexadecimal:' . PHP_EOL;
        $hexadecimal = intval(fgets(STDIN));

        $conversor = hexdec($hexadecimal);

        echo "O Numero é: $conversor" . PHP_EOL;
    }
}
