<?php
//entrada
$precoproduto = (double)readline('Preço unitario do produto: R$ ');
$quntidade = (double)readline('Quantidade comprada: ');
$valorrecebido = (double)readline('Valor recebido: R$ ');

//processamento
$valortotal = $precoproduto * $quntidade;

if ($valorrecebido >= $valortotal) {
    $troco = $valorrecebido - $valortotal;
    echo "Troco: R$ " . number_format($troco, 2, ',', '.') . PHP_EOL;
}

else { $valorrestante = $valortotal - $valorrecebido;
    echo "Valor insuficiente, Faltam R$ " . number_format($valorrestante, 2, ',', '.') . PHP_EOL;

}