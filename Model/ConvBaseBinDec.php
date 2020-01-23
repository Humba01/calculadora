<?php

namespace Modelo\Model;

class ConvBaseBinDec
{
    public function fazConvBaseBinDec()
    {
        echo 'Insira o valor em base binaria:' . PHP_EOL;
        $binario = intval(fgets(STDIN));

        $conversor = bindec($binario);

        echo "O Numero é: $conversor" . PHP_EOL;
    }
}
