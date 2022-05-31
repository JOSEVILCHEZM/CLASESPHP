<?php

/* edades = array(
    "Carlos" => 20, 
    "Mr.Michi" => 18,
    "Juan" => 40,
); 

echo "La edad de Carlos es: " . $edades["Mr.Michi"]; 

echo"\n"; */

$cafes = array(
    "Capuccino" => 15,
    "Latte" => 20,
    "Americano" => 25,

);

/* echo "El precio del café Americano es de {$cafes
    ['Americano']}";*/
    
$personas = array(
     "Carlos" => array(
         "edad" => 20, 
         "apellido" => "Santana"
     ), 
     "Julian" => array(
        "edad" => 19, 
        "apellido" => "Segura"
    ), 
);
    
echo "La información de Julian es: Edad: " .$personas["Julian"]["edad"];

echo"\n"; 
