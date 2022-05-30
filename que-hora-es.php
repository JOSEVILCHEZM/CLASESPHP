<?php

// función readline ayuda a leer los datos de un usuario
// me ayuda a pedirle a un usuario que ingrese algún dato

// se guarda en una variable $segundos.

$segundos = readline("Ingrese el tiempo en segundos: "); 

$horas = $segundos / 3600;

$segundos = $segundos % 3600;

echo $horas . " " . $segundos; 

//podemos veriricarlo si 

//salto de linea

echo "\n"; 


