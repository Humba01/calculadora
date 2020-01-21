<?php

namespace Modelo\Model;

class LogBaseQualquer
{
    public function fazLogBaseQualquer()
    {
        echo 'Insira o valor do logaritmo:' . PHP_EOL;
        $logValor = floatval(fgets(STDIN));

        echo 'Insira a base do logaritmo:' . PHP_EOL;
        $logBaseQualquer = floatval(fgets(STDIN));

        $resultado = log($logValor, $logBaseQualquer);

        echo "O Resultado é: $resultado";
    }
}
