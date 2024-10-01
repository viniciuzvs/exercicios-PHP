<?php
$alcool = 0;
$gasolina = 0;
$diesel = 0;

$codigo = (float)readline('Informe um codigo (1, 2, 3) ou 4 para parar: ');
while ($codigo != 4) {
    switch ($codigo) {
        case 1:
            $alcool++;
            break;
        case 2:
            $gasolina++;
            break;
        case 3:
            $diesel++;
            break;
        default:
            echo "Valor invalido!\n";
            break;
    }
    $codigo = (int)readline('Informe um codigo (1, 2, 3) ou 4 para parar: ');
}
echo "MUITO OBRIGADO\n";
echo "Alcool: $alcool\n";
echo "Gasolina: $gasolina\n";
echo "Diesel: $diesel\n";