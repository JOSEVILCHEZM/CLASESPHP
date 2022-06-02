<?php 

$precios_de_cafes = [12, 56, 32, 89, 2, 1];

//MODIFICAR LA VARIABLE O MODIFICAR EL ARREGLO ORIGINAL USORT

usort($precios_de_cafes, function($a, $b){
    return $a <=> $b; 
 
//vamos a retornar la comparacin para saber COMO 
//Oordenar nuestro arreglo


});

var_dump( $precios_de_cafes );