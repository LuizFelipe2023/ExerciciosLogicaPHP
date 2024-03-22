<?php

function super_Somador($numero, $intervalo) {
    $soma = 0;

    for ($i = $numero; $i <= $intervalo; $i++) {
        echo "$i + ";
        $soma += $i;
    }

    return $soma;
}

$numero = intval(readline("Digite o número: "));
$intervalo = intval(readline("Digite o intervalo: "));

echo "\nSoma: " . super_Somador($numero, $intervalo);

?>
