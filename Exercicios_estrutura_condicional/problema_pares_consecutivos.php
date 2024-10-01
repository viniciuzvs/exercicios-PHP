<?php

$x = (float)readline('Digite um numero inteiro: ');

while ($x != 0) {

    if ($x % 2 != 0) {
        $x++;
    }

    $soma = $x + ($x + 2) + ($x + 4) + ($x + 6) + ($x + 8);
    echo "SOMA = " . $soma . "\n";

    $x = (float)readline('Digite um numero inteiro: ');
}