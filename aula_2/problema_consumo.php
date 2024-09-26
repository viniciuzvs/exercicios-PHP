<?php
//entrada
$km = (float)readline('Distancia percorrida: ');
$combustivel = (float)readline('Combustivel gasto: ');

//processamento
$cons_medio = $km / $combustivel;

//saida
echo " Consumo médio: " . number_format($cons_medio, 3, '.', '.') . PHP_EOL;