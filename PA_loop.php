<?php

$a1 = intval(readline("Digite o primeiro termo da sequência: "));
$razao = intval(readline("Digite a razão da sequência: "));

$n = 10;

$soma = 0;
$vetor = [];

for($i=0;$i<=$n;$i++){
    $valores = $a1 + $i * $razao;
    $vetor[] = $valores;
    $soma += $vetor[$i];
    echo $vetor[$i] . ' ';
}

echo "\nSoma dos elementos da sequência: $soma\n";