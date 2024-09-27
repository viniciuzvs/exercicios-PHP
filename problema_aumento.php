<?php
//entrada
$salario = (double)readline('Digite o salario da pessoa: ');


//processamento
if ($salario <= 1000.00) {
    $aumento = $salario * 0.2;
    $novosalario = $salario + $aumento;
    $porcentagem = '20%';
}

else if ($salario > 1000.00 && $salario <= 3000.00) {
    $aumento = $salario * 0.15;
    $novosalario = $salario + $aumento;
    $porcentagem = '15%';
}

else if ($salario > 3000.00 && $salario <= 8000.00) {
    $aumento = $salario * 0.10;
    $novosalario = $salario + $aumento;
    $porcentagem = '10%';
}

else if ($salario > 8000.00) {
    $aumento = $salario * 0.05;
    $novosalario = $salario + $aumento;
    $porcentagem = '5%';
}


//saida
echo "Novo salario = R$ " . number_format($novosalario, 2, '.', '') . PHP_EOL;
echo "Aumento = R$ " . number_format($aumento, 2, '.', '') . PHP_EOL;
echo "Porcentagem = $porcentagem";