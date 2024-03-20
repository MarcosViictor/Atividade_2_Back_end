<?php 
//Questão 3

$x = trim(fgets(STDIN));
$y = trim(fgets(STDIN));

$x = intval($x);
$y=intval($y);


for($i = $x; $i <= $y; $i++){
  
    if ($i % 5 == 2 || $i % 5 == 3){
    echo $i . "\n";
    }
}

?>