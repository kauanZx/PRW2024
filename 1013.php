<?php
$array = readline();
$ABC = explode(" ", $array);
$A = $ABC[0];
$B = $ABC[1];
$C = $ABC[2];

$maiorAB = ($A + $B + abs($A - $B))/2;
$maiorRC = ($maiorAB + $C + abs($maiorAB - $C))/2;

echo $maiorRC." eh o maior"."\n";
?>