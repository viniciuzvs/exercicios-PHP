<?php

$n1 = (double)readline('Digite a primeira nota: ');
while ($n1 < 0 || $n1 > 10) {
    $n1 = (double)readline('Valor invalido! Tente novamente: ');
}


$n2 = (double)readline('Digite a segunda nota: ');
while ($n1 < 0 || $n1 > 10) {
    $n1 = (double)readline('Valor invalido! Tente novamente: ');
}

$media =($n1+$n2)/2;

echo "MEDIA = " . number_format($media, 2, '.', '');
