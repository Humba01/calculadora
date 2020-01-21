<?php

namespace Modelo\Model;

class ArcoCossenoHiper
{
    public function fazArcoCossenoHiper()
    {
        echo 'Insira o angulo do cosseno hiperbolico no arco trigonometrico:' . PHP_EOL;
        $arcoCossenoHiper = floatval(fgets(STDIN));

        $resultado = acosh($arcoCossenoHiper);

        echo "O Resultado é: $resultado";
    }
}
