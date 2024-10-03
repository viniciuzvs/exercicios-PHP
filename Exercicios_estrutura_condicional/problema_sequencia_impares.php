<?php

$num = (int) readline('Digite o valor de X: ');


for($i = 1; $i <= $num; $i++){
    if ($i % 2 != 0){
       echo "$i\n";
    }

}