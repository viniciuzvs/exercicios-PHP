<?php

$num = (int) readline('Digite o valor de N: ');

if ($num < 0 || $num > 15) {
    echo "ERRO, N DEVE SER NUM. NATURAL DE 0 E 15 \n";
}
else{
    $resultado = 1;

for ($i = 1; $i <= $num; $i++) {
    $resultado *= $i;

}
echo "FATORIAL = $resultado";

}