<?php


//entrada
$largura = (float)readline('digite a largura: ');
$comprimento = (float)readline('digite a comprimento: ');
$vlr_m2 = (float)readline('digite o valor do M2: ');


//processamento
$area = $largura * $comprimento;
$preco = $area * $vlr_m2;


// saida
echo "Àrea do terreno = ".
    number_format($area, 2, '.', '')
. PHP_EOL;

echo "Preço do terreno = ".
    number_format($preco, 2, '.', '')
    . "\n";


