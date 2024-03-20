<?php 

//Questão 5

while (fscanf(STDIN, "%d", $num_lesmas) === 1) {
    $velocidades = explode(' ', trim(fgets(STDIN)));
    $maior_velocidade = max($velocidades);

    if ($maior_velocidade < 10) {
        echo "1\n";
    } elseif ($maior_velocidade > 10 || $maior_velocidade < 20) {
        echo "2\n";
    } else if ($maior_velocidade > 20){
        echo "3\n";
    }
}


?>