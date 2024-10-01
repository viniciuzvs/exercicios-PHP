<?php

echo "Digite as Idades: \n";

$somaidade = 0;
$qtdidade = 0;

$idade = (int)readline();

if ($idade > 0) {
    while ($idade >= 0) {
        //somaidades = somaidades + idade
        $somaidade += $idade;
        //qtdidades = qtdidades + 1
        $qtdidade++;
        $idade = (int)readline();
    }
    $media = $somaidade  / $qtdidade;
    echo "MEDIA: "
    . number_format($media, 2, '.', '');

}
else {
    echo "IMPOSSIVEL CALCULAR\n";
}




