<?php

echo "Digite 7 nomes para preencher o vetor:\n";

$tamanho = 7;

$vetor = [];

for ($i = 0; $i < $tamanho; $i++) { 
    $nome = fgets(STDIN);
    $vetor[] = $nome;
}

echo "Elementos do vetor na ordem inversa:\n";
for ($i = $tamanho - 1; $i >= 0; $i--) {
    echo $vetor[$i] . ' ';
}

?>
