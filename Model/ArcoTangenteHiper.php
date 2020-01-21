<?php

namespace Modelo\Model;

class ArcoTangenteHiper
{
    public function fazArcoTangenteHiper()
    {
        echo 'Insira o angulo da tangente hiperbolica no arco trigonometrico:' . PHP_EOL;
        $arcoTangenteHiper = floatval(fgets(STDIN));

        $resultado = atanh($arcoTangenteHiper);

        echo "O Resultado é: $resultado";
    }
}
