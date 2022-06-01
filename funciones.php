<?php 

function get_celulares() {

    $numero_aleatorio = rand(1, 5);

    switch ($numero_aleatorio) {
        case 1: 
            echo "Xiaomi\n"; 
            break; 
        case 2: 
            echo "Iphone\n";
            break;
        case 3:
            echo "Alcatel\n";
            break;
        case 4:
            echo "Motorola\n";
            break;

        default: 
            echo "Lo siento, no hay la marca que solicitaste \n";
      
    }
}

for ($i=0; $i < 20 ; $i++) { 
    # code...
    get_celulares();
}


echo"\n";