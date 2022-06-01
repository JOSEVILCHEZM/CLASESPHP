<?php

$usernames= ["Vilchez1", "Vilchez2", "Vilchez3"];

do{
    $username= readline("POR FAVOR INGRESA TU NUEVO NOMBRE DE USUARIO: ");

    echo"\n";

// echo "ESTO SE EJECUTA POR LO MENOS UNA VEZ"; 

} while (in_array ($username, $usernames) ); 

echo"\n"; 
