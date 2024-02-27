<?php
$N = intval(readline());
$NOTAS = [100, 50, 20, 10, 5, 2, 1];
$RESTO = $N;
function CALCULO($VALOR, $NOTA)
{
if ($VALOR >= $NOTA) {
echo intval($VALOR / $NOTA) . " nota(s) de R$ " . number_format($NOTA, 2, ",", "") . "\n";
return $VALOR % $NOTA;
} else {
echo "0 nota(s) de R$ " . number_format($NOTA, 2, ",", "") . "\n";
return $VALOR;
}
}
echo "$N\n";
foreach ($NOTAS as $nota) {
$RESTO = CALCULO($RESTO, $nota);
}
?>