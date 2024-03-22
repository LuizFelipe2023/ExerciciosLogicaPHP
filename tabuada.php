<?php

$numero = intval(readline("Digite o valor que deseja pra gerar a tabuada: "));
$tamanho = 10;

for($i=0;$i<=$tamanho;$i++){
    echo "\n$numero x $i = " .($numero*$i); 
}