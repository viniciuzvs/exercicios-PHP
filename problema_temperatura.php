<?php
//entrada
echo "Voce vai digitar a temperatura em qual escala (C/F)? ";
$escala = strtoupper(trim(readline()));

//processamento e saida
if ($escala == 'C' || 'c') {
    echo "Digite a temperatura em Celsius: ";
    $temperaturaC = (double)readline();
    $temperaturaF = ($temperaturaC * 9/5) + 32;
    echo "Temperatura equivalente em Fahrenheit: " . number_format($temperaturaF, 2) . PHP_EOL;
} elseif ($escala == 'F' || 'f') {
    echo "Digite a temperatura em Fahrenheit: ";
    $temperaturaF = (double)readline();
    $temperaturaC = ($temperaturaF - 32) * 5/9;
    echo "Temperatura equivalente em Celsius: " . number_format($temperaturaC, 2) . PHP_EOL;
} else {
    echo "Escala inválida! Por favor, digite 'C' ou 'F'" . PHP_EOL;
}