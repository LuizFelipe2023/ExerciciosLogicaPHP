<?php

print("Digite um numero pra imprimir invertido:\n");

$numero = fgets(STDIN);

$tamanho = strlen($numero);

for($i =$tamanho-1; $i>=0; $i--){
    echo $numero[$i];
}