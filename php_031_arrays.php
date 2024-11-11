<!-- EMPEZAMOS ARRAYS-->
<!--Declaramos un array de diferentes formas y mostramos la primera posicion -->
<!-- print_r() muestra informacion de una variable -->
<!-- var_dump() muestra además el tipo y numero de elementos si es un array -->
<?php
    echo "<h2>Declaración de arrays en PHP</h2>";

    //1. Declaración de arrays usando array()
    echo "<h3>1. Declaración de arrays usando array()</h3>";
    $numeros = array(1, 2, 3, 4, 5);
    echo "<pre>"; //se formatea la salida para visualizarlo como si fuera codigo fuente
        print_r($numeros); //es como var_dump() con arrays
        var_dump($numeros);
    echo "</pre>";

    //2. Declaración arrays con forma corta
    echo "<h3>1. Declaración de arrays usando forma corta</h3>";
    $numeros = [1, 2, 3, 4, 5];
    echo "<pre>"; //se formatea la salida para visualizarlo como si fuera codigo fuente
        print_r($numeros); //es como var_dump() con arrays
        var_dump($numeros);
    echo "</pre>";
?>