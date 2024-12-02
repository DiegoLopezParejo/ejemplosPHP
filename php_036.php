<!-- agregar elementos a un array en cualquier orden
 Al usar los corchetes [] sin un indice especifico, PHP asigna el siguiente indice mayor disponible automáticamente -->
<?php
    $semana [] = "lunes";
    $semana [] = "martes"; 
    $semana [] = "miercoles"; 
    $semana [] = "jueves";
    $semana [] = "viernes"; 
    $semana [] = "sabado";
    $semana [] = "domingo"; 

    for ($i=0; $i < count($semana); $i++) { 
        echo $semana[$i]. "<br>";
    }

    foreach($semana as $dia){
        echo $dia."<br>";
    }
?>