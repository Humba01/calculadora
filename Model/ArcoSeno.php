<?php

namespace Modelo\Model;

class ArcoSeno
{
    public function fazArcoSeco()
    {
        echo 'Insira o angulo do seno no arco trigonometrico:' . PHP_EOL;
        $arcoSeno = floatval(fgets(STDIN));

        $resultado = asin($arcoSeno);

        echo "O Resultado é: $resultado";
    }
}
