<?php

$cantidad_donada =  readline("POR FAVOR INGRESAR LA CANTIDAD 
DE DONACIONES ACUMULADAS QUE TIENES: "); 

if ( $cantidad_donada >= 100){
    echo "Tu retiro está en proceso....";
}
else {
    echo "Lo sentimos, solo puedes retirar después de los 
    100 dólares acumulados.";
}


echo("\n");