<?php

namespace Modelo\Model;

class PotDePot
{
    public function fazPotDePot()
    {
        echo 'Insira a base da potencia:' . PHP_EOL;
        $base = floatval(fgets(STDIN));

        echo 'Insira a quantidade de potencias:' . PHP_EOL;
        $qtdDeVezes = intval(fgets(STDIN));

        $pots = 0;

        for ($i = 1; $i <= $qtdDeVezes; $i++) {
            echo 'Insira a potencia:' . PHP_EOL;
            $potencia = floatval(fgets(STDIN));
            $pots = $pots + $potencia;
        }

        $resultado = $base ** $pots;

        echo "O resultado é: $resultado";
    }
}
