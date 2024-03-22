<?php

$pares = 0;
$impares = 0;
$intervalo = 5;

for ($i = 0; $i < $intervalo; $i++) { 
    $numero = intval(readline("Digite o número " . ($i + 1) . ": "));
    if ($numero % 2 == 0) {
        $pares++;
    } else {
        $impares++;
    }
}

echo "\nA quantidade de pares: $pares\n";
echo "\nA quantidade de ímpares: $impares\n";

?>
