<?php 
function Vilchez() {

    //VAMOS A CREAR UN NUMERO ALEATORIO PARA QUE LA FUNCION VILCHEZ 
    //NOS PUEDA DECIR LAS FRASES
    $numero_aleatorio = rand(1, 4);
    switch ($numero_aleatorio){

        case 1: 
            echo "No parar de aprender\n"; 
            break;
        case 2: 
            echo "No parar de aprender2\n"; 
            break;
        case 3: 
            echo "No parar de aprender3\n"; 
            break;    
        case 4: 
            echo "No parar de aprender3\n"; 
            break; 
        
    }
}

Vilchez();
//INVOCAR FUNCION VILCHEZ

echo"\n";