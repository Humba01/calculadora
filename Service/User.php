<?php

namespace Modelo\Service;

use Modelo\Model\{Soma, Subtracao};

class User
{
    public function ui0()
    {
        echo 'Seja bem vindo(a) à Calculadora!' . PHP_EOL . PHP_EOL;

        echo '1 => Soma' . PHP_EOL;
        echo '2 => Subtracao' . PHP_EOL;
        /*echo '3 => Multiplicacao' . PHP_EOL;
        echo '4 => Divisao' . PHP_EOL;
        echo '5 => Potencia' . PHP_EOL;
        echo '6 => Raiz Quadrada' . PHP_EOL;*/
    }

    public function ui1()
    {
        $resposta = fgets(STDIN);

        switch ($resposta) {
            case 1:
                $soma = new Soma();
                $soma->fazSoma();
                break;
            case 2:
                $subtracao = new Subtracao();
                $subtracao->fazSubtracao();
                break;
            default:
                echo 'Opção não existente no momento!';
                break;
        }
    }
}
