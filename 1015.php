<?php
$array1 = readline();
$XY1 = explode(" ", $array1);
$X1 = $XY1[0];
$Y1 = $XY1[1];

$array2 = readline();
$XY2 = explode(" ", $array2);
$X2 = $XY2[0];
$Y2 = $XY2[1];

$distancia = sqrt(pow($X2 - $X1,2) + pow($Y2 - $Y1,2));

echo number_format($distancia,4)."\n";
?>

