<?php 

function es_estudiante_legend($platzi_rank) {
    if ($platzi_rank >= 20000) {
        echo "¡Eres un estudiante Avanzado!"; 

    }
    else {
        echo "Lo siento no eres un estudiante avanzado\n";
    }
}

do {
$platzi_rank_user = (int) readline(" Dinos cuál es tu Platzi Rank:\n ");



es_estudiante_legend($platzi_rank_user);

}while(true);
echo"\n";