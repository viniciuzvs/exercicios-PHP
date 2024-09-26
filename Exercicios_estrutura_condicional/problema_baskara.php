<?php

//entrada
$a = (double)readline('Digite o valor Coeficiente A: ');
$b = (double)readline('Digite a valor Coeficiente B: ');
$c = (double)readline('Digite a valor Coeficiente C: ');

//processamento
$delta = ($b * $b) - (4 * $a * $c);
//ou
if ($delta == 0 || $delta < 0) {
    echo " A equação não possui raizes reais" . PHP_EOL;
// se não
} else{
    $x1 = (-$b + sqrt($delta)) / (2 * $a);
    $x2 = (-$b - sqrt($delta)) / (2 * $a);

    //exibe as raizes
    echo "X1 = " . number_format($x1, 4, '.', '') . PHP_EOL;
    echo "X2 = " . number_format($x2, 4, '.', '') . PHP_EOL;
}