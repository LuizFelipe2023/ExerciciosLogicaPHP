<?php

do {
    $entrada = intval(readline("Digite um número de 1 a 7 para representar um dia da semana: "));

    switch ($entrada) {
        case 1:
            $dia_semana = 'Segunda-feira';
            break;
        case 2:
            $dia_semana = 'Terça-feira';
            break;
        case 3:
            $dia_semana = 'Quarta-feira';
            break;
        case 4:
            $dia_semana = 'Quinta-feira';
            break;
        case 5:
            $dia_semana = 'Sexta-feira';
            break;
        case 6:
            $dia_semana = 'Sábado';
            break;
        case 7:
            $dia_semana = 'Domingo';
            break;
        default:
            $dia_semana = 'Entrada inválida';
    }

    echo "$dia_semana\n";

} while ($entrada < 1 || $entrada > 7);

?>
