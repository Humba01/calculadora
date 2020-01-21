<?php

namespace Modelo\Model;

class LogNatural
{
    public function fazLogNatural()
    {
        echo 'Insira o valor do logaritmo:' . PHP_EOL;
        $logValor = floatval(fgets(STDIN));

        $resultado = log($logValor);

        echo "O Resultado é: $resultado";
    }
}
