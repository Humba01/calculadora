<?php

namespace Modelo\Model;

class ConvBaseQualquer
{
    public function fazConvBaseQualquer()
    {
        echo 'Insira a base atual do valor: - (em numero)' . PHP_EOL;
        $base1 = intval(fgets(STDIN));

        echo 'Insira a base na qual sera convertida: - (em numero)' . PHP_EOL;
        $base2 = intval(fgets(STDIN));

        if ($base1 !== 2 || 8 || 10 || 16) {
            echo 'Base incorreta, insira uma base válida: 2 - 8 - 10 - 16' . str_repeat(PHP_EOL, 2);

            echo 'Insira a base atual do valor: - (em numero)' . PHP_EOL;
            $base1 = intval(fgets(STDIN));
        } else if ($base2 !== 2 || 8 || 10 || 16) {
            echo 'Base incorreta, insira uma base válida: 2 - 8 - 10 - 16' . str_repeat(PHP_EOL, 2);

            echo 'Insira a base na qual sera convertida: - (em numero)' . PHP_EOL;
            $base2 = intval(fgets(STDIN));
        }

        echo 'Insira o valor:' . PHP_EOL;
        $decimal = intval(fgets(STDIN));

        $conversor = base_convert($decimal, $base1, $base2);

        echo "O Numero é: $conversor" . PHP_EOL;
    }
}
