<?php
 //Hacer un programa que muestre las tablas de multiplicar de los numeros del 1 hasta el 10. Debe haber un encabezado <h3> dentro de cada tabla
 $num1 = 1;
 $num2 = 1;
 while($num2 <= 10){
    echo "<h3>Tabla del numero $num2</h3>";
    while($num1 <= 10){
        $resultado = $num2 * $num1;
        echo $resultado."<br>";
        $num1++;
    }
    $num1 = 0;
    $num2++;
 }
?>