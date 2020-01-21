<?php

namespace Modelo\Model;

class CossecanteHiper
{
    public function fazCossecanteHiper()
    {
        echo 'Insira o angulo da cossecante hiperbolica:' . PHP_EOL;
        $cossecanteHiper = floatval(fgets(STDIN));

        $resultado = 1 / sinh($cossecanteHiper);

        echo "O Resultado é: $resultado";
    }
}
