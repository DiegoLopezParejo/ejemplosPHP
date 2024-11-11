<?php
    //function count($array): cuenta el numero d eelemntos del array
    $ciudades = ["Talavera de la reina", "Toledo", "CR", "Albacete", "Guadalajara"];

    //Imprimir el bucle con un for
    echo "<br><strong> Impresion con bucle for: </strong></br>";
    for ($i=0; $i < count($ciudades) ; $i++) {
        if ($i == 0) {
            echo $i.":".$ciudades[$i]. "<br>";
        }else{
            echo $i."º:".$ciudades[$i]. "<br>";
        }
    }

    //Imprimir el array con un bucle foreach
    //Para cada elemento del vector ciudades, almacena su valor en la variable nombre y en cada iteracion incrementa la posicion del puntero.
    echo "<h3>Informacion con bucle foraeach</h3>";
    foreach($ciudades as $nombre){
        echo $nombre. "<br>";
    }

    //Imprimir el array con print_r
    echo "<h3>Impresion del array completo con print_r()</h3>";
    print_r($ciudades);

    //mostrar información del array con var_dump()
    echo "<h3>Información detallada con var_dump() </h3>";
    var_dump($i); //informacion de la variable contador del bucle for
    echo "<br>";
    var_dump($ciudades);

    
?>