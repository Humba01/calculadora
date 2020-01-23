<?php

namespace Modelo\Model;

class ConvBaseDecOct
{
    public function fazConvBaseDecOct()
    {
        echo 'Insira o valor em base decimal:' . PHP_EOL;
        $decimal = intval(fgets(STDIN));

        $conversor = decoct($decimal);

        echo "O Numero é: $conversor" . PHP_EOL;
    }
}
