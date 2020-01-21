<?php

namespace Modelo\Model;

class Cotangente
{
    public function fazCotangente()
    {
        echo 'Insira o angulo da cotangente' . PHP_EOL;
        $cotangente = floatval(fgets(STDIN));

        $resultado = 1 / tan($cotangente);

        echo "O resultado é: $resultado";
    }
}
