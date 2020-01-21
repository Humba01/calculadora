<?php

namespace Modelo\Model;

class CossenoHiper
{
    public function fazCossenoHiper()
    {
        echo 'Insira o angulo do cossseno hiperbolico:' . PHP_EOL;
        $cossenoHiper = floatval(fgets(STDIN));

        $resultado = cosh($cossenoHiper);

        echo "O Resultado é: $resultado";
    }
}
