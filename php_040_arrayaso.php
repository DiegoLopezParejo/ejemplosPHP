<!-- ARRAYS ASOCIATIVO: El indice (key) de cada elemento es una clave personalizada que no tiene que ser numérica --> 

<?php
    //ARRAY INDEXADO. SUS CLAVES SON 1 2 3 4 5 6
    $semana = ["lunes", "martes", "miercoles", "jueves", "viernes"];
    
    //muestro la clave y el valor de un array indexado 
    foreach($semana as $clave => $valor){
        echo "$clave => $valor<br>";
    }

    //ARRAY ASOCIATIVO. SUS CLAVES SERÁN juan, ana, luis y marta
    $edades = ["Juan" => 25, "Ana" => 30, "Luis" => 22, "Marta" => 28];

    echo "<br>";

    foreach($edades as $nombre => $edad){
        echo "$nombre tiene $edad años"."<br>";
    }
?>