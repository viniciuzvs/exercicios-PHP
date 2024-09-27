<?php
//entrada
echo "Digite o primeiro numero: ";
$numero1  = (int)readline();
echo "digite o segundo numero: ";
$numero2 = (int)readline();

//processamento e saida
if ($numero1 % $numero2 == 0 || $numero2 % $numero1 == 0) {
    echo "São multiplos" . PHP_EOL;
}

else {
    echo "Não são multiplos" . PHP_EOL;
}