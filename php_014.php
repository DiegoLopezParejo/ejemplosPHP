<?php
    //EXPRESIONES ARTIMÉTICAS
    //No es necesario inicializar variables en PHP, sin embargo, es muy buena práctica. 
    //Las variables no inicailizadas tienen un valor predeterminado de acuerso a su tipo dependiendo del contexto en el que son usadas.
    //Los booleans se asumen como false, los enteros y flotantes como cero,
    //las cadenas (usadas con echo) se establecen como una cadena vacía, y los arrays se establecen como un array vacío.

    $a = 20;
    $b = 3;
    $resultado = 0;

    //Suma
    $resultado = $a + $b;
    echo "$a + $b es $resultado <br>";
    echo '$a + $b es $resultado';

    //Resta
    $resultado = $a - $b;
    echo "$a - $b es $resultado <br>";

    //Multiplicación
    $resultado = $a * $b;
    echo "$a * $b es $resultado <br>";

    //Division
    $resultado = $a / $b;
    echo "$a / $b es $resultado <br>";
    
    //Division entera
    $resultado = (int)($a / $b);
    echo "(int($a / $b)es $resultado)"; 

    //Modulo es decir resto
    $resultado = $a % $b;
    echo "El resto de $a entre $b es $resultado";

    //Incrementos. Post-incremento: devuelve el valor y luego lo incrementa
    $resultado = $a++; //$resultado = $a; $resultado $a = $a + 1;
    echo "El valor de a con post-incremento es: $a. El valor de resultado es $resultado <br>";

    //Pre-incremento
    $resultado = ++$a; //1º $a = $a + 1; 2º $resultado = $a
    echo "El valor de a con pre-incremento es: $a. El valor de resultado es $resultado <br>";

    //Post inremento
    $a = 20;
    $resultado = $a--; //resultado=20; $a= 19;
    echo "El valor de a con post-decremento es: $a. El valor de resultado es:
    $resultado <br>";

    //Pre-decremento
    $a = 20;
    $resultado = --$a;
    echo "El valor con pre-decremento es: $a. El valor de resultado es: $resultado <br>";

    //asignacion con operadores
    $a = 20;
    $a += 10; //$a = &a + 10;
?>