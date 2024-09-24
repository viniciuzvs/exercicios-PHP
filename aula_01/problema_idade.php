<?php

//entrada
$nome = readline('Digite o seu Nome: ');
$idade = (int)readline('Digite a sua Idade: ');
//segunda entrada
$nome2 = readline('Digite o seu Nome: ');
$idade2 = (int)readline('Digite a sua Idade: ');

//processamento
$idade_media = ($idade + $idade2) / 2;

//saida
echo "A idade média entre $nome e $nome2 é: " . $idade_media . " anos";