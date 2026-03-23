<?php
//buscar funciones nativas de php meter todas en un archivo de php y comentar el titulo y que hace cada funcion...

$numeros=[10,20,40,24,50,60,19,40,56];
$frase="Era_Un_Paracaidista_Que_Nunca_El_Miedo_Domino";



strlen($frase);
//Retorna la longitud de una cadena

strtolower($frase);
//Convierte texto a minúsculas

strtoupper($frase);
//Convierte texto a mayúsculas

str_replace( "_"," ",$frase);
//Reemplaza texto dentro de una cadena

substr( $frase, "0", "18" );
//Extrae una fragmento del array

