<?php
function aumento_salario($salario, $percentual_aumento)
{
    return $salario + ($salario * $percentual_aumento / 100);
}

print("Digite seu salário: \n");

$salario = floatval(fgets(STDIN));

print("Digite o percentual de aumento: \n");

$percentual_aumento = floatval(fgets(STDIN));

$resultado_aumento = aumento_salario($salario, $percentual_aumento);

echo "Salário com aumento: " . number_format($resultado_aumento, 2) . "\n";

?>
