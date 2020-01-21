<?php

namespace Modelo\Model;

class ArcoSenoHiper
{
    public function fazArcoSenoHiper()
    {
        echo 'Insira o angulo do seno hiperbolico no arco trigonometrico:' . PHP_EOL;
        $arcoSenoHiper = floatval(fgets(STDIN));

        $resultado = asinh($arcoSenoHiper);

        echo "O Resultado é: $resultado";
    }
}
