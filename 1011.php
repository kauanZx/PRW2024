<?php
$R = floatval(readline());
$pi = 3.14159;

$VOLUME = (4/3.0) * $pi * pow($R,3);
echo "VOLUME = ".number_format($VOLUME,3,'.','')."\n";
?>