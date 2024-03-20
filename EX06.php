<?php 
//Questão 6

$x = intval(fgets(STDIN));
$y = intval(fgets(STDIN));
$soma = 0;

for ($i = min($x, $y) + 1; $i < max($x, $y); $i++){
 if($i % 2 != 0){
    $soma += $i;
 }
}

echo $soma;

?>