<?php

   //entrada
   $nota1 = (float)readline('Digite o valor da primeira nota: ');
   $nota2 = (float)readline('Digite o valor da sugunda nota: ');

   //processamento
   $nota_final = ($nota1 + $nota2) / 2;

   //saida
   echo "NOTA FINAL = " . number_format($nota_final, 1, '.', '.') . PHP_EOL;

   //verificar se o aluno foi aprovado
   if ($nota_final < 60.0) {
      echo "REPROVADO";
   }






