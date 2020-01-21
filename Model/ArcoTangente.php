<?php

namespace Modelo\Model;

class ArcoTangente
{
    public function fazArcoTangente()
    {
        echo 'Insira o angulo da tangente no arco trigonometrico:' . PHP_EOL;
        $arcoTangente = floatval(fgets(STDIN));

        $resultado = atan($arcoTangente);

        echo "O Resultado é: $resultado";
    }
}
