<?php

namespace Modelo\Model;

class ArcoCossecante
{
    public function fazArcoCossecante()
    {
        echo 'Insira o angulo da cossecante no arco trigonometrico:' . PHP_EOL;
        $arcoCossecante = floatval(fgets(STDIN));

        $resultado = 1 / asin($arcoCossecante);

        echo "O Resultado é: $resultado";
    }
}
