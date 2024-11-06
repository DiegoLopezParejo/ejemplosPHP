<?php
    //variable centinela y contador
    //Programa que es escribe numero de uno a 500 y se repite hasta que aparece un múltiplo de 7. Pero como mucho se repite 7 veces

    $salir = false; //variable centinela
    $i = 0; //contador

    while(!$salir && $i < 8){
        $num = rand(1,500);
        echo($num."<br>");
        $i++;
        $salir = ($num % 7 == 0);
        //if($num % 7 == 0){
        //    $salir = true;
        //}
    }
?>