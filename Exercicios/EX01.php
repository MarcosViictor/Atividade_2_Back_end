<?php 


// questão 1
$a = trim(fgets(STDIN));
$b = trim(fgets(STDIN));
$s = trim(fgets(STDIN));

$a = intval($a);
$b = intval($b);
$s = intval($s);

$maiorAB = ($a + $b + abs($a - $b)) / 2;
$maior = ($maiorAB + $s + abs($maiorAB - $s)) / 2;

echo "$maior eh o maior\n";


?>