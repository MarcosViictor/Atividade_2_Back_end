<?php 
//Questão 2
$valor = trim(fgets(STDIN));

$valor = intval($valor);

echo $valor . "\n";

$cedulas = [100, 50, 20, 10, 5, 2 , 1];


foreach ($cedulas as $cedulas_n){
  
  $quantidade_cedulas = intdiv($valor, $cedulas_n);

  $valor %= $cedulas_n;

  echo $quantidade_cedulas . " nota(s) de R$ " . $cedulas_n . ",00\n";
}

?>