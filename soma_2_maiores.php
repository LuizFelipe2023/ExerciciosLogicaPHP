<?php

$maior = 0;
$segundo_maior = 0;

$array = [];

for($i=0;$i<3;$i++){
    $numeros = intval(fgets(STDIN));
    $array[] = $numeros;
}

foreach ($array as $numero) {
    if ($numero > $maior) {
        $segundo_maior = $maior;
        $maior = $numero;
    } elseif ($numero > $segundo_maior) {
        $segundo_maior = $numero;
    }
}

$soma_maiores = $maior + $segundo_maior;

echo "A soma dos dois maiores números é: $soma_maiores\n";