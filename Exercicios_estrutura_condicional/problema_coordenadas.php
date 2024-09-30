<?php
//entrada
$x = (float)readline('Valor de X: ');
$y = (float)readline('Valor de Y: ');

if ($x == 0 && $y == 0) {
    echo "origem";
}

elseif ($x == 0) {
    echo "Eixo X";
}

elseif ($y == 0) {
    echo "Eixo X";
}

elseif ($x > 0 && $y > 0) {
    echo "Q1";
}

elseif ($x < 0 && $y > 0) {
    echo "Q2";
}

elseif ($x < 0 && $y < 0) {
    echo "Q3";
}

elseif ($x > 0 && $y < 0) {
    echo "Q4";
}