<?php

echo "Digite o primeiro número: ";
$num1 = intval(fgets(STDIN));

echo "Digite o segundo número: ";
$num2 = intval(fgets(STDIN)); 
$quociente = $num1 / $num2;
$resto = $num1 % $num2;

echo "Quociente = $quociente\n";
echo "Resto = $resto\n";
?>
