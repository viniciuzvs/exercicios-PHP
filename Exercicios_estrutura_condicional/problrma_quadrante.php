<?php

while (true) {
    echo "Digite os valores das coordenadas X e Y:\n";

    $x = (float)readline();
    $y = (float)readline();

    if ($x == 0 || $y == 0) {
        break;
    }

if ($x > 0 && $y > 0) {
    echo "QUADRANTE Q1\n";
}

elseif ($x < 0 && $y > 0) {
    echo "QUADRANTE Q2\n";
}

elseif ($x < 0 && $y < 0) {
    echo "QUADRANTE Q3\n";
}

elseif ($x > 0 && $y < 0) {
    echo "QUADRANTE Q4\n";
}

}
