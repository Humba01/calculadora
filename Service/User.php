<?php

namespace Modelo\Service;

use Modelo\Model\{
    Divisao,
    Soma,
    Subtracao,
    Multiplicacao,
    Potencia,
    RaizQuadrada
};

class User
{
    public function ui0()
    {
        echo 'Seja bem vindo(a) à Calculadora!' . PHP_EOL . PHP_EOL;

        echo '1 => Soma' . PHP_EOL;
        echo '2 => Subtracao' . PHP_EOL;
        echo '3 => Multiplicacao' . PHP_EOL;
        echo '4 => Divisao' . PHP_EOL;
        echo '5 => Potencia' . PHP_EOL;
        echo '6 => Raiz Quadrada' . PHP_EOL;
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
            case 3:
                $multiplicacao = new Multiplicacao();
                $multiplicacao->fazMultiplicacao();
                break;
            case 4:
                $divisao = new Divisao();
                $divisao->fazDivisao();
                break;
            case 5:
                $potencia = new Potencia();
                $potencia->fazPotencia();
                break;
            case 6:
                $raizQuadrada = new RaizQuadrada();
                $raizQuadrada->fazRaizQuadrada();
                break;
            default:
                echo 'Opção não existente no momento!';
                break;
        }
    }
}
