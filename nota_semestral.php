<<?php

print("Calculadora de Média semestral 1.0\n");

print("Digite as duas primeiras notas do primeiro bimestre: ");

$p1 = floatval(fgets(STDIN)); 
$p2 = floatval(fgets(STDIN));

print("Digite agora as duas notas do segundo bimestre:\n");

$p3 = floatval(fgets(STDIN));
$p4 = floatval(fgets(STDIN));


$media_semestral = ($p1 + $p2 + $p3 + $p4) / 4;

$media_semestral_formatado = number_format($media_semestral, 2);

print("A Média Semestral é igual a {$media_semestral_formatado}\n");

?>
