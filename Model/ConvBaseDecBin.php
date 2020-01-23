<?php

namespace Modelo\Model;

class ConvBaseDecBin
{
    public function fazConvBaseDecBin()
    {
        echo 'Insira o valor em base decimal:' . PHP_EOL;
        $decimal = intval(fgets(STDIN));

        $conversor = decbin($decimal);

        echo "O Numero é: $conversor" . PHP_EOL;
    }
}
