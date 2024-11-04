<?php
    $a = 20;
    $b = 20;

    if($a > $b){
        print("A es mayor que B y vale $a");
    }else{
        if($a < $b){
            print("B es mayor que A y vale $b");
        }else{
            print($b." B y A son iguales y su valor es $a");
        }
    }

    //con elseif. Mas comun ¿y con operador ternario?
    if($a > $b){
        print("A es mayor que B y vale $a");
    }elseif($a < $b){
        print("B es mayor que A y su valor es $b");
    }else{
        print("Los dos son iguales $a y $b");
    }
?>