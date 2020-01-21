<?php

namespace Modelo\Model;

class Tangente
{
    public function fazTangente()
    {
        echo 'Insira o angulo da tangente:' . PHP_EOL;
        $tangente = floatval(fgets(STDIN));

        $resultado = tan($tangente);

        echo "O resultado é: $resultado";
    }
}
