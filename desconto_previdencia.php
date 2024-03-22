<?php

print("Calculadora de Desconto Previdenciário:\n");
$valor_max_desconto = 334.29;

print("Digite o valor do salário:\n");

$salario = floatval(fgets(STDIN));

$desconto = $salario * 11 / 100; 

if ($desconto > $valor_max_desconto) {
    $desconto = $valor_max_desconto; 
}

$salario_liquido = $salario - $desconto;

echo "O valor do desconto sobre o salário = $desconto\n";
echo "O salário líquido após o desconto = $salario_liquido\n";

?>
