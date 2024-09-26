<?php
//entrada
$p_produ = (float)readline('Digite o preço do produto: ');
$q_produ = (float)readline('Digite a quantidade do produto: ');
$dinheiro = (float)readline('Digite o valor recebido R$: ');

//processamento
$total = ($q_produ * $p_produ);
$troco = $dinheiro - $total;

//saida
echo "Seu toco é R$:"  . number_format($troco, 2, '.', '.');
