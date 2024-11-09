<!-- BUCLE FOR
BUCLE: Estructura de programación que se usa para repetir un determinado código un numero determinado de veces.
FOR: BUCLE que conocemos de antemano el número de veces que quiero repetir la acción
For lleva; la inicialización, la condicion y el incremento o decremento.
    for( inicialización; condicion; incremento/decremento){
        bloque codigo
    }
-->
<?php
    //Imprimir del 2 al 100 y solo los pares
    for($i = 2; $i <= 100; $i = $i + 2){
            $msg = ($i == 100) ? "$i. " : "$i, "; //debes de poner el si no porque si no lo haces te imprime el 100 con la coma y luego sin coma
            echo $msg;
    }
    
    //for($i = 1; $i <= 100; $i++){
    //    echo $i." ";
    //}
?>