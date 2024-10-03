<?php

echo "Digite dois números: \n";
$x = (int)readline();
$y = (int)readline();

if ($x > $y) {
    $maior = $x;
    $menor = $y;
}
else{
    $maior = $y;
    $menor = $x;
}
$soma = 0;

for ($i = $menor + 1; $i <= $maior - 1; $i++) {
    if ($i % 2 != 0) {
        $soma = $soma + $i;
    }
}
echo "SOMA DOS IMPARES = $soma" . PHP_EOL;