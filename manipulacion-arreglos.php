<?php

//$edades = [28, 32, 40, 34]; 
//COUNT para contar cuantos elemtnos hay dentro del arreglo 

//echo count($edades); 

//array push , permite agregar al final un 
//numero a mi arreglo 

//array_push($edades, 13);

//var_dump($edades); 

//is array, si es un arreglo  */

//$esto_no_es_un_arreglo = " ";

//var_dump( is_array($edades) ); 

//EXPLODE 
/*$lista_de_frutas = "fresa,cereza,manzana"; 
$lista_de_frutas_array = explode(",", $lista_de_frutas);

var_dump($lista_de_frutas_array);

echo "\n";*/

//IMPLODE 
$lista_de_frutas_array = ["fresa","cereza","manzana"]; 
$lista_de_frutas = implode("," , $lista_de_frutas_array);

var_dump($lista_de_frutas);

echo "\n";
