<?php
//entrada
$primeiro = (double)readline("Primeiro valor: ");
$segundo = (double)readline("Segundo valor: ");
$terceiro = (double)readline("Terceiro valor: ");

//processamento, iniciar variavel
$menor = $primeiro;
//verificar segundo numero é menor
if ($segundo < $menor) {
    $menor = $segundo;
}
//verificar terceiro numero é menor
if ($terceiro < $menor) {
    $menor = $terceiro;
}

//saida
echo "MENOR: $menor" . PHP_EOL;
