<?php
//entrada
$nome = readline("Nome do Funcionário: ");
$vlr_hora = (float) readline("Valor recebido por hora trabalhada R$: ");
$qtd_hora = (int) readline("Quantidade de horas trabalhada: ");

//processamento
$total = $vlr_hora * $qtd_hora;

//saida
echo "O pagamento para $nome deve ser de R$: " . number_format($total, 2, ',', '') . PHP_EOL;