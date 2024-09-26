<?php
//entrada
$medida_a = (float)readline('Digite a mediada A: ');
$medida_b = (float)readline('Digite a mediada B: ');
$medida_c = (float)readline('Digite a mediada C: ');

//processamento
$area_quadrado = (pow($medida_a, 2));
$area_triangulo = ($medida_b * $medida_a) / 2;
$area_trapezio = (($medida_a + $medida_b) * $medida_c) / 2;


//saida
echo "Área do Quadrado: " .
    number_format($area_quadrado, 4, '.', ' ') . PHP_EOL;
echo "Área do Triangulo: " .
    number_format($area_triangulo, 4, '.', ' ') . PHP_EOL;
echo "Área do Tapezio: " .
    number_format($area_trapezio, 4, '.', ' ') . PHP_EOL;