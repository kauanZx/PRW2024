<?php
$HORAS = intval(readline());
$VM = intval(readline());
$DISTANCIA = $HORAS * $VM;
$LITROS = $DISTANCIA/12;
echo number_format($LITROS,3)."\n";
?>