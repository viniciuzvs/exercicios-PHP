<?php

$coelho = 0;
$rato = 0;
$sapo = 0;
$total = 0;

echo "Quantos casos voce vai digitar? ";
$teste = (float)readline();

for ($i = 0; $i < $teste; $i++) {
    $quantidadecobaias = (float)readline('Quantidade de cobaias: ');
    $tipocobaias = (int)readline('Tipo de cobaia: ');

    switch ($tipocobaias) {
        case 'C':
            $coelho+=$quantidadecobaias;
            break;
        case 'R':
            $rato+=$quantidadecobaias;
            break;
        case 'S':
            $sapo+=$quantidadecobaias;
            break;
        default:
            echo "Animal Invalido!\n";
    }
    $total += $quantidadecobaias;

    echo"RELATORIO FINAL:";
    echo"Total: $total cobaias";
    echo "Total de coelhos: $coelho";
    echo"Total de ratos: $rato" ;
    echo"Total de sapos: $sapo";
    echo"Percentual de coelhos: " . ($coelho / $total) . "\n";
    echo"Percentual de ratos: " . ($rato / $total) . "\n";
    echo"Percentual de sapos: " . ($sapo / $total) . "\n";











}