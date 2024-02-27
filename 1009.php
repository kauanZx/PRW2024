<?php
$NOME = readline();
$SALARIO = doubleval(readline());
$VENDAS = doubleval(readline());

$TOTAL = $SALARIO + ($VENDAS * 15/100);

echo "TOTAL = R$ ".number_format($TOTAL, 2, '.', '')."\n";
?>