<?php

$maior = 0;
$media = 0;
$soma = 0;
$pessoas_mais_18 = 0;
$pessoas_menos_de_5 = 0;
$vetor = [];

for ($i = 0; $i <= 9; $i++) {
    $idade = intval(readline("Digite a idade da pessoa " . ($i + 1) . ": "));
    $vetor[] = $idade;
    $soma += $vetor[$i]; 
    if ($vetor[$i] > $maior) {
        $maior = $vetor[$i];
    }

    if ($vetor[$i] > 18) {
        $pessoas_mais_18++;
    }

    if ($vetor[$i] < 5) {
        $pessoas_menos_de_5++;
    }
}

$media = $soma / 10;

echo "Maior idade: $maior\n";
echo "Média das idades: $media\n";
echo "Quantidade de pessoas com mais de 18 anos: $pessoas_mais_18\n";
echo "Quantidade de pessoas com menos de 5 anos: $pessoas_menos_de_5\n";

?>
