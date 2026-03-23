<?php
//buscar funciones nativas de php meter todas en un archivo de php y comentar el titulo y que hace cada funcion...

$numeros=[10,20,40,24,50,60,19,40,56];
$frase=["        Era_Un_Paracaidista_Que_Nunca_El_Miedo_Domino        "];

//01. strlen()

strlen($frase[0]);
//Retorna la longitud de una cadena de texto qu este dentro del array

//02. strtoloer()

strtolower($frase[0]);
//Convierte texto a minúsculas 

//03. strtoupper()

strtoupper($frase[0]);
//Convierte texto a mayúsculas

//04. replace()

str_replace( "_"," ",$frase);
//Reemplaza texto dentro de una cadena

//05. substr()

substr( $frase[0], "0", "18" );
//Extrae una fragmento del array

//06. strpos()

strpos($frase[0], "Que" );
//Busca la posición de un texto dentro de otro

//07. trim()

trim($frase[0]);

//Elimina espacios al inicio y final

//08. explode()

explode("---", $numeros[0], 3);
//Divide una cadena en un array

//09. implode()

implode( "numeros, ", $numeros );
//Une elementos de un array en una cadena

//10. abs()

abs(134.66);

//retorna el valor absoluto 

//11. round()

round(132.55);

//redondea un numero decimal

//12. ceil()

ceil(143.88);

//redondea hacia arriba

//13. floor()

floor(143.88);

//redondea hacia abajo

//14. rand()

rand(0,100000);

//genera un numero aleatorio con los parametros que se le piden

// 15. sqrt()

sqrt(54);

//calcula la raiz cuadrada de un numero

// 16. count()

count( $numeros );

//cuanta la cantidad de elementos con los que cuenta un array

// 17. array_push()

array_push($numeros, 54);

//agrega un elemento al final del array

//18. array_pop()

array_pop($numeros);

//elimina el ultimo elemento que tiene un array

//19. array_merge()

array_merge($frase, $numeros);

//20. In_array()

in_array("34", $numeros);

//verifica si un valor existe en un array

//21. sort()

sort($numeros);

//ordena los elementos de menor a mayor

//22. array_keys()

array_keys($numeros, 1);

//retorna todas las claves osea todos los valores que contengan lo que se pide que busque

//23. array_values ()

array_values($numeros);

//retorna todos los valores que contiene un array

// 24. date()

date( "");

//formatea una fecha

//25. time()

time();

//devuelve el unix timestamp actual o todos los segundos que han pasado desde el 1 de enero de 1970

//26. strotime()

strtotime("25 Diciembre 2026");

//27. file_get_contents()

file_get_contents("") ;

//lee el contenido de algun archivo 

//28. file_put_contents()

file_put_contents( "archivo.txt" , "hola mundo") ;

//escribe contenido en un archovo seleccionado

//29. json_encode()

json_encode($numeros);

//convierte un array en un objeto JSON

//30. json_decode()

json_decode($frase[0]); 

//convierte un archivo en un JSON a objeto/array de PHP
