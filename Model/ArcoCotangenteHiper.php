<?php

namespace Modelo\Model;

class ArcoCotangenteHiper
{
    public function fazArcoCotangenteHiper()
    {
        echo 'Insira o angulo da cotangente hiperbolica no arco trigonometrico:' . PHP_EOL;
        $arcoCotangenteHiper = floatval(fgets(STDIN));

        $resultado = 1 / atanh($arcoCotangenteHiper);

        echo "O Resultado é: $resultado";
    }
}
