<?php
 //Hacer un programa que muestre las tablas de multiplicar de los numeros del 1 hasta el 10. Debe haber un encabezado <h3> dentro de cada tabla
 //Si quiero insertar html dentro de php debe ser con echo o print 
 //Bucles anidados puede ser un for dentro de otro for. Los bucles anidados se usan cuando quieres hacer alago similar a una tabla

 //Forma fácil
// $num2 = 1;
//while($num2 <= 10){
//   echo "<h3>Tabla del numero $num2</h3>";
//    $num1 = 1;
//    while($num1 <= 10){
//        $resultado = $num2 * $num1;
//        echo "$num2 x $num1 es $resultado"."<br>";
//        $num1++;
//    }
//    $num2++;
// }

//Con for
    for($i = 1; $i <= 10; $i++){
            echo "<h3>Tabla del $i</h3>";
            for($j = 1; $j <= 10; $j++){
                    $res = $i * $j;
                    echo "$i x $j = $res <br>";
            }
    }
?>