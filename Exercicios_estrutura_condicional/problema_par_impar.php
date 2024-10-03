<?php

echo "Quantos numeros voce vai digitar? ";
$num = (int)readline();

for ($i = 0; $i < $num; $i++) {
    echo "Digite um numero: ";
    $x = (int)readline();

    if($x < 0 && $x % 2 != 0) {
        echo "IMPAR NEGATIVO" . PHP_EOL;
    }
    elseif ($x > 0 && $x % 2 != 0) {
        echo "IMPAR POSITIVO" . PHP_EOL;
    }
    elseif ($x < 0 && $x % 2 == 0) {
        echo "PAR NEGATIVO" . PHP_EOL;
    }
    else{
        if ($x == 0){
            echo "NULO" . PHP_EOL;
        }
    }

}