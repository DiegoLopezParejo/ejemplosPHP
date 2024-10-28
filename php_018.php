<?php
//if normal 
    $a = 8;
    $b = 5;
    if($a > $b){
        echo "$a es mayor que $b <br>";
    }
//if con operador ternario. L a"?" es "entonces" y los ":" es "sino"
    $resultado = ($a > $b) ? "$a es mayor que $b con ternario" : "";
    echo $resultado;
?>