<?php
$array1 = readline();
$P1 = explode(" ", $array1);
$n1 = $P1[1];
$n2 = $P1[2];

$array2 = readline();
$P2 = explode(" ", $array2);
$n3 = $P2[1];
$n4 = $P2[2];

$TOTAL = ($n1*$n2)+($n3*$n4);

echo "VALOR A PAGAR: R$ ".number_format($TOTAL, 2, '.', '')."\n";
?>