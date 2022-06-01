<?php 

$Tienda_de_cafes = array (
    "Amerciano" => 20,
    "Latte" => 25, 
    "Capuccino" =>27.5,
    "Mocca" =>24,
);

foreach ($Tienda_de_cafes as $cafe => $price) {
    echo " El café $cafe cuesta $$price USD \n";     
}

echo "\n";
