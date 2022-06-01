<?php 
function Vilchez() {

    //VAMOS A CREAR UN NUMERO ALEATORIO PARA QUE LA FUNCION VILCHEZ 
    //NOS PUEDA DECIR LAS FRASES
    $numero_aleatorio = rand(1, 4);
    $frases_de_Vilchez = " ";

    switch ($numero_aleatorio){
    
        case 1: 
            $frases_de_Vilchez ="No parar de aprender\n"; 
            break;
        case 2: 
            $frases_de_Vilchez ="No parar de aprender2\n"; 
            break;
        case 3: 
            $frases_de_Vilchez ="No parar de aprender3\n"; 
            break;    
        case 4: 
            $frases_de_Vilchez ="No parar de aprender3\n"; 
            break; 
        
    }
    return $frases_de_Vilchez;
}

echo Vilchez();
//INVOCAR FUNCION VILCHEZ

echo"\n";