<?php

echo "Quantos numeros voce vai digitar? ";
$num = (int)readline();

$dentro = 0;
$fora = 0;

for ($i = 0; $i <= $num; $i++) {
    echo "Digite um numero: ";
    $x = (int)readline();


if ( $x >= 10 && $x <= 20 ) {
    $dentro++;
}else {
    $fora++;
}
}
echo "$dentro DENTRO \n";
echo "$fora FORA \n";