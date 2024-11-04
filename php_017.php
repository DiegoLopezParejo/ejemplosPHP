<?php
    //Operadores logicos
    //TRUE equivale a 1 y FALSE equivale a 0
    //AND (&& o and): devuelve true si ambas expresiones son verdaderas.
    //OR (|| o or): devuelve true si al menos una de las expresiones es verdadera.
    //NOT (!): Invierte el valor lógico de una expresión.

    $a = 5;// true porque es distinta de 0
    $b = 0;// false porque es 0
    $c = 10;// true poqrue es distinta de 0

    //AND lógico (&&). Devuelve true si ambos operadores son ciertos
    echo "AND lógico (&&): <br>";
    //echo (int)($a && $b). "<br>"; Se pone el int para que te reconozca el 0
    //echo ($a && $c). "<br>";
    
    //con if
    $result = ($a && $b) ? "true" : "false" . "<br>"; //operador ternario
        echo $result;

    if ($a && $b) {
        echo "Es true"."<br>";
    }else{
        echo "Es false"."<br>";
    }

    //OR (||). Es true si al menos uno de los operandos es true
    echo "OR lógico (||): <br>";
    echo (int)($a || $b)."<br>";
    echo (int)($a || $c)."<br>";
    echo (int)($b || 0)."<br>";

    //NOT (!). Invierte el valor lógico
    echo "Not lógico (!): <br>";
    echo $a."<br>";
    echo (int) !$a."<br>";
?>