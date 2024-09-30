<?php

echo "Digite dois numeros:\n";
$n1 = (int)readline();
$n2 = (int)readline();
//enquanto n1 for diferente de n2
while ($n1 != $n2) {
    //faça
if ($n1 > $n2) {
    echo "DECRESCENTE\n";
}
elseif ($n1 < $n2) {
    echo "CRESCENTE\n";
}

//ler outros valores novamente...
    echo "Digite dois numeros:\n";
    $n1 = (int)readline();
    $n2 = (int)readline();

}