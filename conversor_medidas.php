<?php

print("Conversor de m/s em Km/h\n");

$metros_por_segundo = floatval(fgets(STDIN));

$conversao = $metros_por_segundo * 3.6; 

print("Resposta = {$conversao} km/h\n");

?>
