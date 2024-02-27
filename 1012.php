<?php
$array = readline();
$ABC = explode(" ", $array);
$A = $ABC[0];
$B = $ABC[1];
$C = $ABC[2];

$TRIANGULO = ($A * $C)/2;
$CIRCULO = pow($C,2) * 3.14159;
$TRAPEZIO = (($A + $B) * $C)/2;
$QUADRADO = pow($B,2);
$RETANGULO = $A * $B;

echo "TRIANGULO: ".number_format($TRIANGULO,3,'.','')."\n";
echo "CIRCULO: ".number_format($CIRCULO,3,'.','')."\n";
echo "TRAPEZIO: ".number_format($TRAPEZIO,3,'.','')."\n";
echo "QUADRADO: ".number_format($QUADRADO,3,'.','')."\n";
echo "RETANGULO: ".number_format($RETANGULO,3,'.','')."\n";
?>