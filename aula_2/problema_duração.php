<?php
//entrada
$segundos = (float)readline('Digite a duração dos segundos: ');

// Processamento
$horas = floor($segundos / 3600); // Calcula o número de horas
$minutos = floor(($segundos % 3600) / 60); // Calcula o número de minutos
$segundos = $segundos % 60; // Calcula o número de segundos restantes

// Saída
echo "A duração em Horas é: $horas:$minutos:$segundos" . PHP_EOL;