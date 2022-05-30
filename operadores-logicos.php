<?php

$gatos_felinos = true; 
$gatos_4_patas = true; 
$gatos_vuelan = false; 
$gatos_saben_dibujar = false; 

//AND 

//var_dump($gatos_felinos && $gatos_4_patas); 

//OR

//var_dump($gatos_4_patas || $gatos_4_pataspatas); 

//NOT 

# var_dump( !$gatos_4_patas );

$resultado = $gatos_4_patas and $gatos_saben_dibujar; 
var_dump( $resultado); 


echo "\n"; 
