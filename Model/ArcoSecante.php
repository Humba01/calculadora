<?php

namespace Modelo\Model;

class ArcoSecante
{
    public function fazArcoSecante()
    {
        echo 'Insira o angulo da secante no arco trigonometrico:' . PHP_EOL;
        $arcoSecante = floatval(fgets(STDIN));

        $resultado = 1 / acos($arcoSecante);

        echo "O Resultado é: $resultado";
    }
}
