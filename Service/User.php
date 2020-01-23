<?php

namespace Modelo\Service;

use Modelo\Model\{
    ArcoCossecante,
    ArcoCossecanteHiper,
    ArcoCosseno,
    ArcoCossenoHiper,
    ArcoCotangente,
    ArcoCotangenteHiper,
    ArcoSecante,
    ArcoSecanteHiper,
    ArcoSeno,
    ArcoSenoHiper,
    ArcoTangente,
    ArcoTangenteHiper,
    ConvBaseBinDec,
    ConvBaseDecBin,
    ConvBaseDecHex,
    ConvBaseDecOct,
    ConvBaseHexBin,
    ConvBaseHexDec,
    ConvBaseOctDec,
    ConvBaseQualquer,
    ConvGrausRad,
    ConvRadGraus,
    Cossecante,
    CossecanteHiper,
    Divisao,
    Soma,
    Subtracao,
    Multiplicacao,
    Potencia,
    RaizQuadrada,
    PotDePot,
    Seno,
    Cosseno,
    Cotangente,
    Secante,
    Tangente,
    SenoHiper,
    CossenoHiper,
    CotangenteHiper,
    DemonsValorPi,
    LogBaseDez,
    LogBaseQualquer,
    LogNatural,
    SecanteHiper,
    TangenteHiper,
};

class User
{
    public function ui0()
    {
        echo 'Seja bem vindo(a) à Calculadora!' . PHP_EOL . PHP_EOL;

        echo '00 => Sair da Calculadora' . PHP_EOL;
        echo '01 => Soma' . PHP_EOL;
        echo '02 => Subtracao' . PHP_EOL;
        echo '03 => Multiplicacao' . PHP_EOL;
        echo '04 => Divisao' . PHP_EOL;
        echo '05 => Potencia' . PHP_EOL;
        echo '06 => Raiz Quadrada' . PHP_EOL;
        echo '07 => Potencia de Potencia' . PHP_EOL;
        echo '08 => Seno' . PHP_EOL;
        echo '09 => Cosseno' . PHP_EOL;
        echo '10 => Tangente' . PHP_EOL;
        echo '11 => Secante' . PHP_EOL;
        echo '12 => Cossecante' . PHP_EOL;
        echo '13 => Cotangente' . PHP_EOL;
        echo '14 => Seno Hiperbolico' . PHP_EOL;
        echo '15 => Cosseno Hiperbolico' . PHP_EOL;
        echo '16 => Tangente Hiperbolico' . PHP_EOL;
        echo '17 => Secante Hiperbolica' . PHP_EOL;
        echo '18 => Cossecante Hiperbolica' . PHP_EOL;
        echo '19 => Cotangente Hiperbolica' . PHP_EOL;
        echo '20 => Arco Seno' . PHP_EOL;
        echo '21 => Arco Cosseno' . PHP_EOL;
        echo '22 => Arco Tangente' . PHP_EOL;
        echo '23 => Arco Secante' . PHP_EOL;
        echo '24 => Arco Cossecante' . PHP_EOL;
        echo '25 => Arco Cotangente' . PHP_EOL;
        echo '26 => Arco Seno Hiperbolico' . PHP_EOL;
        echo '27 => Arco Cosseno Hiperbolico' . PHP_EOL;
        echo '28 => Arco Tangente Hiperbolico' . PHP_EOL;
        echo '29 => Arco Secante Hiperbolica' . PHP_EOL;
        echo '30 => Arco Cossecante Hiperbolica' . PHP_EOL;
        echo '31 => Arco Cotangente Hiperbolica' . PHP_EOL;
        echo '32 => Logaritmo de Base Dez' . PHP_EOL;
        echo '33 => Logaritmo de Base Qualquer' . PHP_EOL;
        echo '34 => Logaritmo Natural' . PHP_EOL;
        echo '35 => Conversor de Base Decimal em Binaria' . PHP_EOL;
        echo '36 => Corversor de Base Decimal em Octadecimal' . PHP_EOL;
        echo '37 => Conversor de Base Decimal em Hexadecimal' . PHP_EOL;
        echo '38 => Conversor de Base Binaria em Decimal' . PHP_EOL;
        echo '39 => Conversor de Base Hexadecimal em Binaria' . PHP_EOL;
        echo '40 => Conversor de Base Hexadecimal em Decimal' . PHP_EOL;
        echo '41 => Conversor de Base Octadecimal em Decimal' . PHP_EOL;
        echo '42 => Corversor de Base Qualquer' . PHP_EOL;
        echo '43 => Conversor de Angulos em Graus para Radianos' . PHP_EOL;
        echo '44 => Conversor de Angulos em Radianos para Graus' . PHP_EOL;
        echo '45 => Demonstrador do valor de PI' . PHP_EOL;
    }

    public function ui1()
    {
        $resposta = fgets(STDIN);

        switch ($resposta) {
            case 0:
                echo str_repeat(PHP_EOL, 2) . 'Até o proximo uso :-D' . PHP_EOL;
                break;
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
            case 7:
                $potDePot = new PotDePot();
                $potDePot->fazPotDePot();
                break;
            case 8:
                $seno = new Seno();
                $seno->fazSeno();
                break;
            case 9:
                $cosseno = new Cosseno();
                $cosseno->fazCosseno();
                break;
            case 10:
                $tangente = new Tangente();
                $tangente->fazTangente();
                break;
            case 11:
                $secante = new Secante();
                $secante->fazSecante();
                break;
            case 12:
                $cossecante = new Cossecante();
                $cossecante->fazCossecante();
                break;
            case 13:
                $cotangente = new Cotangente();
                $cotangente->fazCotangente();
                break;
            case 14:
                $senoHiper = new SenoHiper();
                $senoHiper->fazSenoHiper();
                break;
            case 15:
                $cossenoHiper = new CossenoHiper();
                $cossenoHiper->fazCossenoHiper();
                break;
            case 16:
                $tangenteHiper = new TangenteHiper();
                $tangenteHiper->fazTangenteHiper();
                break;
            case 17:
                $secanteHiper = new SecanteHiper();
                $secanteHiper->fazSecanteHiper();
                break;
            case 18:
                $cossecanteHiper = new CossecanteHiper();
                $cossecanteHiper->fazCossecanteHiper();
                break;
            case 19:
                $cotangenteHiper = new CotangenteHiper();
                $cotangenteHiper->fazCotangenteHiper();
                break;
            case 20:
                $arcoSeno = new ArcoSeno();
                $arcoSeno->fazArcoSeco();
                break;
            case 21:
                $arcoCosseno = new ArcoCosseno();
                $arcoCosseno->fazArcoCosseno();
                break;
            case 22:
                $arcoTangente = new ArcoTangente();
                $arcoTangente->fazArcoTangente();
                break;
            case 23:
                $arcoSecante = new ArcoSecante();
                $arcoSecante->fazArcoSecante();
                break;
            case 24:
                $arcoCossecante = new ArcoCossecante();
                $arcoCossecante->fazArcoCossecante();
                break;
            case 25:
                $arcoCotangente = new ArcoCotangente();
                $arcoCotangente->fazArcoCotangente();
                break;
            case 26:
                $arcoSenoHiper = new ArcoSenoHiper();
                $arcoSenoHiper->fazArcoSenoHiper();
                break;
            case 27:
                $arcoCossenoHiper = new ArcoCossenoHiper();
                $arcoCossenoHiper->fazArcoCossenoHiper();
                break;
            case 28:
                $arcoTangenteHiper = new ArcoTangenteHiper();
                $arcoTangenteHiper->fazArcoTangenteHiper();
                break;
            case 29:
                $arcoSecanteHiper = new ArcoSecanteHiper();
                $arcoSecanteHiper->fazArcoSecanteHiper();
                break;
            case 30:
                $arcoCossecanteHiper = new ArcoCossecanteHiper();
                $arcoCossecanteHiper->fazArcoCossecanteHiper();
                break;
            case 31:
                $arcoCotangenteHiper = new ArcoCotangenteHiper();
                $arcoCotangenteHiper->fazArcoCotangenteHiper();
                break;
            case 32:
                $logBaseDez = new LogBaseDez();
                $logBaseDez->fazLogBaseDez();
                break;
            case 33:
                $logBaseQualquer = new LogBaseQualquer();
                $logBaseQualquer->fazLogBaseQualquer();
                break;
            case 34:
                $logNatural = new LogNatural();
                $logNatural->fazLogNatural();
                break;
            case 35:
                $baseDecBin = new ConvBaseDecBin();
                $baseDecBin->fazConvBaseDecBin();
                break;
            case 36:
                $baseDecOct = new ConvBaseDecOct();
                $baseDecOct->fazConvBaseDecOct();
                break;
            case 37:
                $baseDecHex = new ConvBaseDecHex();
                $baseDecHex->fazConvBaseDecHex();
                break;
            case 38:
                $baseBinDec = new ConvBaseBinDec();
                $baseBinDec->fazConvBaseBinDec();
                break;
            case 39:
                $baseHexBin = new ConvBaseHexBin();
                $baseHexBin->fazConvBaseHexBin();
                break;
            case 40:
                $baseHexDec = new ConvBaseHexDec();
                $baseHexDec->fazConvBaseHexDec();
                break;
            case 41:
                $baseOctDec = new ConvBaseOctDec();
                $baseOctDec->fazConvBaseOctDec();
                break;
            case 42:
                $baseQualquer = new ConvBaseQualquer();
                $baseQualquer->fazConvBaseQualquer();
                break;
            case 43:
                $convDegRad = new ConvGrausRad();
                $convDegRad->fazConvGrausRad();
                break;
            case 44:
                $convRadDeg = new ConvRadGraus();
                $convRadDeg->fazConvRadGraus();
                break;
            case 45:
                $valorPi = new DemonsValorPi();
                $valorPi->fazDemonsValorPi();
                break;
            default:
                echo 'Opção não existente no momento!' . PHP_EOL;
                echo 'Para sair selecione a opção 0!' . PHP_EOL;
                echo 'Se deseja continuar selecione uma das demais!' . str_repeat(PHP_EOL, 2);
                self::ui2();
        }
    }

    public function ui2()
    {
        self::ui0();
        self::ui1();
    }
}
