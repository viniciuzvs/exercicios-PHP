<?php
$num = (float)readline('Deseja a tabuada para qual valor? ');

for ($i = 1; $i <= 10; $i++) {
    $resultado = $num * $i;
    echo "$num x $i = $resultado\n";
}