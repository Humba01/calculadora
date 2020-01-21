<?php

namespace Modelo\Model;

class ArcoCossecanteHiper
{
    public function fazArcoCossecanteHiper()
    {
        echo 'Insira o angulo da cossecante hiperbolica no arco trigonometrico:' . PHP_EOL;
        $arcoCossecanteHiper = floatval(fgets(STDIN));

        $resultado = 1 / asinh($arcoCossecanteHiper);

        echo "O Resultado é: $resultado";
    }
}
