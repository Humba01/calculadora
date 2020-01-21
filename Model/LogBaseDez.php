<?php

namespace Modelo\Model;

class LogBaseDez
{
    public function fazLogBaseDez()
    {
        echo 'Insira o valor do logaritmo:' . PHP_EOL;
        $logValor = floatval(fgets(STDIN));

        $resultado = log10($logValor);

        echo "O Resultado é: $resultado";
    }
}
