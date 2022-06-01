<?php 

$Tienda_de_cafes = array (
    "Amerciano" => 20,
    "Recalentado" => 10,
    "Latte" => 25, 
    "Capuccino" =>27.5,
    "Mocca" =>24,
);

foreach ($Tienda_de_cafes as $cafe =>$precio){

    if ($cafe == "Recalentado"){
        continue;
    }

    //echo" Actualmente encontré al café $cafe \n";
    echo" ¡Te recomiendo este café $cafe , es mi favorito! \n";

    // if( $cafe == "Latte") {
       // echo "¡ENCONTRAMOS A LATTE!";
      //  break; 
    }
    

echo"\n";