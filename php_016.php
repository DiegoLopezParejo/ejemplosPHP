<?php
    //CADENAS. Su posicion inicial siempre es 0
    //FUNCIONES:
    //srtlen(): Devuelve la posicion de una cadena
    //strtolower(): Pasa TODA la cadena a minusculas
    //strtoupper(): Pasa TODA la cadena a mayusculas
    //strcmp(): Compara dos cadenas (sensible a mayusculas y minusculas, es decir las distingue) Devuelve 0 si son iguales.
    //strcasecmp(): Compara dos cadenas (insensible a mayusculas y minusculas, es decir no las distingue) Devuelve 0 si son iguales.
    //substr(): Extraer una parte de la cadena
    //str_repeat(): Repite una cadena el numero de veces que se especifica
    //trim(): Elimina los espacios en blanco al principio y al final de una cadena (para los login)
    //str_word_count(): Couenta las palabras de una cadena de texto
    //strrev(): Invierte una cadena hola te escribe aloh
    //strpos(): Busca un texto dentro de una cadena y devuelve su posicion
    //str_replace(): reemplaza unos caracteres por otros

    //Ejemplos
    //Asignar "Hola Mundo! a una variable"
    $texto = "Hola Mundo!";

    //Contamos numero de palabras
    echo "Numero de palabras de $texto: ".str_word_count($texto)."<br>";

    //Invertir la cadena
    echo "Invertimos la cadena $texto".strrev($texto)."<br>";

    //buscamos el texto "Mundo" dentro de la cadena
    echo "la posicion de 'Mundo':".strpos($texto, "Mundo")."<br>";

    //reemplazar "Mundo" por "Dolly"
    echo "reemplazo 'Mundo' por 'Dolly':".str_replace("Mundo", "Dolly", $texto)."<br>";

    //Longitud de una cadena
    echo "Longitud de una cadena '$texto':".strlen($texto)."<br>";

    //Pasar a minusculas
    echo "Cadena en minusculas: ".strtolower($texto)."<br>";

    //Pasar a mayusculas
    echo "Cadena en minusculas: ".strtoupper($texto)."<br><br>";

    //comparar cadenas sensibles mayusculas y minusculas
    echo "comparacion de 'Hola' y 'hola': ".strcmp("Hola", "hola")."<br>";

    //comparar cadenas insensibles mayusculas y minusculas
    echo "comparacion de 'Hola' y 'hola': ".strcasecmp("Hola", "hola")."<br>";

    //Extrer 3 caracteres a partir del caracter cinco (mira la documentacion aqui)
    echo "subcadena de '$texto' de tres caracteres a partir del quinto: ".substr($texto,5,3)."<br>";
    echo "subcadena de '$texto' a partir del quinto caracter: ".substr($texto,5 )."<br>";

    //repetir una cadena
    echo "repetir la cadena 'Hola' tres veces: ".str_repeat("Hola ",3)."<br>";

    //eliminar espacios en blanco de una cadena esto lo tenemos que arreglar
    $texto2 = "Hola Mundo";
    echo "Cadena con espacios eliminiados: ".trim($texto2);
?>