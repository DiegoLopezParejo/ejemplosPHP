<!-- BUCLE CENTINELA. Hay una variavbel que me dice si nos salimos del bucle

Programa que escribe número aleatorios entre 1 y 500 y se pare cuando el numero sea múltiplo de 7
-->

<?php
    $salir = false;


    while(!$salir){ //mientras sea falso
        $num = rand(1,500);
        echo var_dump($salir); 
        echo "$num <br>";
        $salir = ($num%7 == 0); //el centinela vale verdadero si es multiplo de 7. Se le asigna este valor y al tener valor es true
        //if($num%7 == 0){
        //    $salir = true;
        //}
    }
?>