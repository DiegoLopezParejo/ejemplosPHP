<?php
    //(int)var: convertir una variable a entero
    $var1 = 5.9; //el operador = es asignar y el operador == es igual
    $var2 = (int)$var1;
    //echo $var1.'<br>'; //el . concatena
    //echo '$var1 <br>'; Las comillas simples no detectan el contenido de las variables, pero las dobles si
    echo "$var1<br>";
    echo $var2;
?>