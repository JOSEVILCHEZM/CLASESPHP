<?php 


/* function suma_infinita(...$params) {

     var_dump($params);
}



suma_infinita(100, 40, 2, 9, 3);

echo "\n";*/

function suma_infinita(...$params) {
    $suma = 0;
    //CICLO QUE RECORRE UN ARREGLO SIN IMPORTAR QUE TAN LARGO SEA
    foreach ($params as $numero){
        $suma += $numero;
    }

    echo "La sumatoria es: $suma \n";

}

suma_infinita(1, 2);
suma_infinita(100, 40, 2);
suma_infinita(100, 40, 2, 9, 3);
echo"\n";
