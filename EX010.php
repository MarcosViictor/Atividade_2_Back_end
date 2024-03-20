<?php 

//Questão 10

function decodificarCifraDeCesar($texto_cifrado, $deslocamento) {
    $texto_decifrado = '';

  
    for ($i = 0; $i < strlen($texto_cifrado); $i++) {
        $char = $texto_cifrado[$i];
    
        if (ctype_alpha($char)) {
            
            $posicao_original = ord($char) - $deslocamento;
          
            if ($posicao_original < ord('A')) {
                
                $posicao_original += 26;
            }
            
            $texto_decifrado .= chr($posicao_original);
        } else {

            $texto_decifrado .= $char;
        }
    }

    return $texto_decifrado;
}


function decodificarEntrada() {
    $n = intval(fgets(STDIN));

    
    for ($i = 0; $i < $n; $i++) {
        $texto_cifrado = trim(fgets(STDIN)); 
        $deslocamento = intval(fgets(STDIN)); 
        
        echo decodificarCifraDeCesar($texto_cifrado, $deslocamento) . "\n";
    }
}

decodificarEntrada();







?>