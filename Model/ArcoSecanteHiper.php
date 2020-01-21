<?php

namespace Modelo\Model;

class ArcoSecanteHiper
{
    public function fazArcoSecanteHiper()
    {
        echo 'Insira o angulo da secante hiperbolica no arco trigonometrico:' . PHP_EOL;
        $arcoSecanteHiper = floatval(fgets(STDIN));

        $resultado = 1 / acosh($arcoSecanteHiper);

        echo "O Resultado é: $resultado";
    }
}
