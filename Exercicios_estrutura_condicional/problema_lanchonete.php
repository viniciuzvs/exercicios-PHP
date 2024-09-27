<?php
//entrada
$precos = [
    1 => 5.00,
    2 => 3.50,
    3 => 4.80,
    4 => 8.90,
    5 => 7.32,
];

//processamento
echo "Codigo do produto comprado: ";
$codigo = (int)readline();

echo "Quantidade do produto: ";
$quantidade = (int)readline();

if (array_key_exists($codigo, $precos)) {
    $valortotal = $precos[$codigo] * $quantidade;
    echo "Valor total a pagar: R$" . number_format($valortotal, 2, ',', '.') . PHP_EOL;
}
else {
    echo "Valor informado errado." . PHP_EOL;
}
