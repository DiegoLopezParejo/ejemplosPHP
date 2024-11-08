<?php
 //Hacer un programa que muestre las tablas de multiplicar de los numeros del 1 hasta el 10. Debe haber un encabezado <h3> dentro de cada tabla
 //Si quiero insertar html dentro de php debe ser con echo o print 
 //Bucles anidados puede ser un for dentro de otro for. Los bucles anidados se usan cuando quieres hacer alago similar a una tabla

//Con for y poniendo bordes a la tabla
    for($i = 1; $i <= 10; $i++){
        echo "<table style = 'margin: 10px auto;border: 2px solid green; border-collapse: collapse; text-align: center;'><tr><th colspan = '5' >Tabla del $i</th></tr>";       
            for($j = 1; $j <= 10; $j++){
                    $res = $i * $j;
                   echo "<tr>";
                        echo "<td style = 'border: 2px solid green; padding: 5px;'>$i</td>";
                        echo "<td style = 'border: 2px solid green; padding: 5px;'>x</td>";
                        echo "<td style = 'border: 2px solid green; padding: 5px;'>$j</td>";
                        echo "<td style = 'border: 2px solid green; padding: 5px;'>=</td>";
                        echo "<td style = 'border: 2px solid green; padding: 5px;'>$res</td>";                    
                   echo "</tr>";
            }
        echo "</table><br>";        
    }
?>