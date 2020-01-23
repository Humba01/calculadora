<?php

namespace Modelo\Model;

class ConvBaseOctDec
{
    public function fazConvBaseOctDec()
    {
        echo 'Insira o valor em base octadecimal:' . PHP_EOL;
        $octadecimal = intval(fgets(STDIN));

        $conversor = octdec($octadecimal);

        echo "O Numero é: $conversor" . PHP_EOL;
    }
}
