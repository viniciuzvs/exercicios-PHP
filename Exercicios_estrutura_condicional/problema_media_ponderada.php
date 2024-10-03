<?php

echo "Quantos casos voce vai digitar? ";
$numero = (int)readline();

for ($i = 0; $i < $numero; $i++) {
    echo "Digite tres numeros: \n";
    $n1 = (float)readline();
    $n2 = (float)readline();
    $n3 = (float)readline();

    $media  = (($n1 * 2) + ($n2 * 3) + ($n3 * 5)) / 10;
    echo "MEDIA = "
    . round($media, 1, PHP_ROUND_HALF_DOWN) . "\n";
}