1005
<?php
$nA = doubleval(readline());
$nB = doubleval(readline());

$pA = 3.5;
$pB = 7.5;

$media = (($nA * $pA) + ($nB * $pB)) / ($pA + $pB);

echo "MEDIA = " . number_format($media, 5, '.', '') . "\n";
?>