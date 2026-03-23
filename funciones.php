<?php
//buscar funciones nativas de php meter todas en un archivo de php y comentar el titulo y que hace cada funcion...

$numeros=[10,20,40,24,50,60,19,40,56];
$frase="        Era_Un_Paracaidista_Que_Nunca_El_Miedo_Domino        ";

//01. strlen()

strlen($frase);
//Retorna la longitud de una cadena de texto qu este dentro del array

//02. strtoloer()

strtolower($frase);
//Convierte texto a minúsculas 

//03. strtoupper()

strtoupper($frase);
//Convierte texto a mayúsculas

//04. replace()

str_replace( "_"," ",$frase);
//Reemplaza texto dentro de una cadena

//05. substr()

substr( $frase, "0", "18" );
//Extrae una fragmento del array

//06. strpos()

strpos($frase, "Que" );
//Busca la posición de un texto dentro de otro

//07. trim()

trim("$frase");
//Elimina espacios al inicio y final

//08. explode()

explode("---", $numeros[], 3);
//Divide una cadena en un array

//09. implode()

implode( "numeros, ", $numeros );
//Une elementos de un array en una cadena

//10. abs()

abs(134.66);

//retorna el valor absoluto

