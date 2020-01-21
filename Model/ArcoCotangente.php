<?php

namespace Modelo\Model;

class ArcoCotangente
{
    public function fazArcoCotangente()
    {
        echo 'Insira o angulo da cotangente no arco trigonometrico:' . PHP_EOL;
        $arcoCotangente = floatval(fgets(STDIN));

        $resultado = 1 / atan($arcoCotangente);

        echo "O Resultado é: $resultado";
    }
}
