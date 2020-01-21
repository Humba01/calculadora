<?php

namespace Modelo\Model;

class ArcoCosseno
{
    public function fazArcoCosseno()
    {
        echo 'Insira o angulo do cosseno no arco trigonometrico:' . PHP_EOL;
        $arcoCosseno = floatval(fgets(STDIN));

        $resultado = acos($arcoCosseno);

        echo "O Resultado é: $resultado";
    }
}
