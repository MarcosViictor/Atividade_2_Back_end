<?php 

//Questão 8

function criptografarLinha($linha) {
    $tamanho = strlen($linha);
    $cripto = '';


    for ($i = 0; $i < $tamanho; $i++) {
        $char = $linha[$i];
        if (ctype_alpha($char)) {
            $ascii = ord($char);
            $ascii += 3;
            
            if (($char <= 'Z' && $ascii > ord('Z')) || ($char <= 'z' && $ascii > ord('z'))) {
                $ascii -= 26;
            }
            $char = chr($ascii);
        }
        $cripto .= $char;
    }

 
    $cripto = strrev($cripto);

   
    $metade = ceil($tamanho / 2);
    for ($i = $metade; $i < $tamanho; $i++) {
        $char = $cripto[$i];
        if (ctype_alpha($char)) {
            $ascii = ord($char);
            $ascii -= 1;
            $char = chr($ascii);
        }
        $cripto[$i] = $char;
    }

    return $cripto;
}


function criptografarEntrada() {
    $n = intval(fgets(STDIN));
    for ($i = 0; $i < $n; $i++) {
        $linha = trim(fgets(STDIN));
        echo criptografarLinha($linha) . "\n";
    }
}

criptografarEntrada();


?>