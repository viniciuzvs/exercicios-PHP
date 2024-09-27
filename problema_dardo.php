<?php
//entrada

echo "Digite a primeira distancia: ";
$distancia1 = (float)readline();

echo "Digite a segunda distancia: ";
$distancia2 = (float)readline();

echo "Digite a terceira distancia: ";
$distancia3 = (float)readline();

//processamento
$maiorDistancia = max($distancia1, $distancia2, $distancia3);

//saida
 echo "A maior distancia = " . number_format($maiorDistancia, 2, '.', '') . PHP_EOL;


