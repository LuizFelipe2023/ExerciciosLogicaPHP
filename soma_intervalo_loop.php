<?php
echo "Digite um valor pra gerar um intervalo e sua soma: \n ";

$intervalo = intval(fgets(STDIN));

$soma = 0;

for($i=1;$i<=$intervalo;$i++){
    $soma += $i;

    echo $i .' + ';
}
echo "O valor da soma do intervalo é igual = {$soma}\n";