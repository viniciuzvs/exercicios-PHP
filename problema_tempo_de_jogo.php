<?php

$inicial = (float)readline('Hora Inicial: ');
$final = (float)readline('Hora Final: ');

if($inicial == $final){
    $duracao = 24;
}

elseif ($final > $inicial) {
    $duracao = $final - $inicial;
}

else{
    $duracao = (24 - $inicial) + $final;
}

echo "O jogo durou $duracao horas";