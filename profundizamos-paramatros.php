<?php

function suma($a, $b) {
    echo "La suma de $a + $b es :" . $a + $b; 
}

$numeros = [1, 2];
$numeros1 = [50, 20];
$numeros2 = [10000, 2];

suma(...$numeros);
echo "\n";
suma(...$numeros1);
echo "\n";
suma(...$numeros2);
echo "\n";
