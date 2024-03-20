<?php 
//Questão 9

function calcularLEDs($numero) {

    $leds_por_digito = array(6, 2, 5, 5, 4, 5, 6, 3, 7, 6);

  
    $total_leds = 0;

    
    $numero_str = strval($numero);

    
    for ($i = 0; $i < strlen($numero_str); $i++) {
        $digito = intval($numero_str[$i]);
        $total_leds += $leds_por_digito[$digito];
    }

    return $total_leds;
}


function calcularLEDsEntrada() {
    $n = intval(fgets(STDIN)); 

    
    for ($i = 0; $i < $n; $i++) {
        $valor = intval(fgets(STDIN));
        $leds = calcularLEDs($valor); necessários
       
    }
    echo $leds . " leds\n"; 
}


calcularLEDsEntrada();










?>