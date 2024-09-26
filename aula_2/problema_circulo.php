<?php

//entrada
$raio = (float)readline('Digite o valor do raio do circulo: ');
$pi = M_PI;

//processamento
$area = $pi * pow($raio, 2);

//saida
echo  "Área = " . number_format($area, 4, '.', '') . PHP_EOL;