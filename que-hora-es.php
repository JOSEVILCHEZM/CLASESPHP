<?php
//CREAR PROGRAMA QUE AYUDE A CONVERTIR SEGUNDOS A HORAS,MINUTOS Y SEGUNDOS
// función readline ayuda a leer los datos de un usuario
// me ayuda a pedirle a un usuario que ingrese algún dato

// se guarda en una variable $segundos.

$segundos = readline("Ingrese el tiempo en segundos: "); 

$horas = (int) ($segundos / 3600);

$segundos = (int) ($segundos % 3600);

$minutos = (int) ($segundos / 60); 

$segundos = (int) ($segundos % 60);

echo "Son $horas horas, $minutos minutos y $segundos segundos."; 


//podemos veriricarlo si 

//salto de linea

echo "\n"; 


