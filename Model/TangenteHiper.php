<?php

namespace Modelo\Model;

class TangenteHiper
{
    public function fazTangenteHiper()
    {
        echo 'Insira o angulo da tangente hiperbolica:' . PHP_EOL;
        $tangenteHiper = floatval(fgets(STDIN));

        $resultado = tanh($tangenteHiper);

        echo "O Resultado é: $resultado";
    }
}
