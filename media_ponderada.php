<?php

$maior = 0;

$array = [];

for($i=0;$i<3;$i++){
    $numeros = intval(fgets(STDIN));
    $array[] = $numeros;
}

for($i=0; $i<3; $i++){
    if($array[$i]>$maior){
        $maior = $array[$i];
    }
}

$media_ponderada = ($array[0] * 2.5 + $array[1] * 2.5 + $maior *5);

echo "A média ponderada dos números é: $media_ponderada\n";
