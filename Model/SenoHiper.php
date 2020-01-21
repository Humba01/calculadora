<?php

namespace Modelo\Model;

class SenoHiper
{
    public function fazSenoHiper()
    {
        echo 'Insira o angulo do seno hiperbolico:' . PHP_EOL;
        $senoHiper = floatval(fgets(STDIN));

        $resultado = sinh($senoHiper);

        echo "O Resultado é: $resultado";
    }
}
