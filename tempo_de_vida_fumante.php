<?php

$cigarros_por_dia = intval(fgets(STDIN));
$anos_fumante = floatval(fgets(STDIN));

$total_cigarros = $cigarros_por_dia * $anos_fumando;

$tempo_perdido_minutos = $total_cigarros * 10;

$tempo_perdido_dias = $tempo_perdido_minutos / 1440;

echo "Um fumante perderá aproximadamente $tempo_perdido_dias dias de vida.\n";
