<?php

//entrada
$b_retangulo = (float)readline('digite a base do retangulo: ');
$a_retangulo = (float)readline('digite a altura do retangulo: ');



//processamento
$area = $b_retangulo * $a_retangulo;
$perimetro = 2 * ($b_retangulo + $a_retangulo);
$diagonal = sqrt(pow($b_retangulo, 2) + pow($a_retangulo, 2));

//saida
echo "A área do retângulo é: " .
    number_format($area, 4, '.', '')
    . PHP_EOL;
echo "O perimetro do retângulo é: " .
    number_format($perimetro, 4, '.', '')
    . PHP_EOL;
echo "A diagonal do retângulo é: " .
    number_format($diagonal, 4, '.', '')
    . PHP_EOL;


