<?php
//entrada
$glicose = (double)readline('Digite a medida da glicose: ');

//processamento e saida
if ($glicose <= 100.0) {
    $classificado = "Normal";
} elseif ($glicose > 100.0 && $glicose <= 140.0) {
    $classificado = "elevado";
} else {
    $classificado = "Diabete";
}

echo "Classificado: $classificado" . PHP_EOL;

