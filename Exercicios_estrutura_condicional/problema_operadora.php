<?php
//entrada
$minutos = (double)readline('Digite a quantidade de minutos:  ');

//processamento
$custo = 50.00;
$franquiamin = 100;
$cobrancamin = 2.00;

// Inicializa o valor a ser pago com o custo do plano básico
$valorapagar = $custo;

// verificar se houve minutos exedentes
if ($minutos > $franquiamin) {
    $minutosexedentes = $minutos - $franquiamin;
    $valorapagar += $minutosexedentes * $cobrancamin;
}

//saida
echo "Valor a pagar: R$ " . number_format($valorapagar, 2, ',', '.') . PHP_EOL;
