<?php
$NFUNC = intval(readline());
$NHORA = intval(readline());
$VALOR = doubleval(readline());

$SALARIO = $NHORA * $VALOR;
echo "NUMBER = ".$NFUNC."\n";
echo "SALARY = U$ ".number_format($SALARIO, 2, '.', '')."\n";
?>