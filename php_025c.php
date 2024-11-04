<!-- BUCLE CENTINELA. Hay una variavbel que me dice si nos salimos del bucle

Programa que escribe número aleatorios entre 1 y 500 y se pare cuando el numero sea múltiplo de 7
-->

<?php
    $salir = false;

    while(!$salir){
        $num = rand(1,500);
        echo "$num <br>";
        $salir = ($num%7 == 0); //el centinela vale verdadero si es multiplo de 7. Se le asigna este valor
    }
?>