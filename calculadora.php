<?php
require_once 'E:\Programas-Próprios\Calculadora\src\Modelo\Service\User.php';
require_once 'E:\Programas-Próprios\Calculadora\src\Modelo\Model\Soma.php';
require_once 'E:\Programas-Próprios\Calculadora\src\Modelo\Model\Subtracao.php';
require_once 'E:\Programas-Próprios\Calculadora\src\Modelo\Model\Multiplicacao.php';
require_once 'E:\Programas-Próprios\Calculadora\src\Modelo\Model\Divisao.php';

use Modelo\Service\User;

$interface = new User();
$interface->ui0();
$interface->ui1();
