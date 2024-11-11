<!-- agregar elementos a un array en cualquier orden
 Al usar los corchetes [] sin un indice especifico, PHP asigna el siguiente indice mayor disponible automáticamente -->
<?php
    $semana [1] = "lunes";
    $semana [] = "martes"; //se imprime en la posicion 2
    $semana [] = "miercoles"; //se imprime en 3
    $semana [10] = "jueves";
    $semana [] = "viernes"; //se imprime en 11
    $semana [5] = "sabado";
    $semana [] = "domingo";  //se imprime en la 12

    echo "<pre>";
    print_r($semana);
    echo "</pre>";
?>