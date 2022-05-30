<?php


$a = 5; 
$b = 5; 
$b2 = "5";
$c = 9; 
$d = 23; 

// == IGUAL 
// SI MI VARIABLE A ES IGUAL A B 

/* var_dump( $a === $b ); 
var_dump( $a === $b2 ); */

//identico ===

//!= Diferente 
//var_dump( $a != $b ); 

//!== Diferente pero compara tipos 

//var_dump( $a !== $b );
//var_dump( $a !== $b2);

//< Menor que 

/* var_dump( $a < $b );
var_dump( $c < $b );
var_dump( $d < $b ); */

//> Mayor que 

/* var_dump( $a > $b );
var_dump( $c > $b );
var_dump( $d > $b ); */

// >= Mayor o igual que
/* var_dump( $a >= $b );
var_dump( $c >= $b );
var_dump( $d >= $b ); */

// <= Mayor o igual que
/* var_dump( $a <= $b );
var_dump( $c <= $b );
var_dump( $d <= $b ); */

//<=> Nave espacial
//echo 2 <=> 1; // 1
//echo 1 <=> 9;

// fusion de null, ??
// Cual es la primera variable que está definida

$edad_de_julia = 23; 

echo $edad_de_cinthia ?? $edad_de_julia; 
// SI LA EDAD DE CINTHIA ENTONCES USA LA EDAD DE JULIA
echo" \n"; 
