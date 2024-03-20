<?php 
//Questão 12

function maxPilhaFigurinhas($F1, $F2) {
    $maior_divisor_comum = gcd($F1, $F2);
    return $maior_divisor_comum;
}

function gcd($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

$N = intval(fgets(STDIN));

for ($i = 0; $i < $N; $i++) {
    list($F1, $F2) = explode(" ", trim(fgets(STDIN)));
    echo maxPilhaFigurinhas($F1, $F2) . "\n";
}
?>