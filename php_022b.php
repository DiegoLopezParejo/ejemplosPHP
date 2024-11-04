<!-- Transfromamos el siguiente for en un bucle while -->
<!-- WHILE: tiene la condicion antes de entrar al bucle, por la tanto CIUDADO puede que nunca llegue a entrar.
WHILE es un bucle que se ejecuta mientras se cumpla una condicion. No lleva inicialización, por lo tanto hay que hacerlo fuera del bucle.
WHILE no lleva incremento/decremento, hay que hacerlo dentro del bucle. 
-->
<?php
    $i = 1;
    while($i <= 100){
        echo $i." ";
        $i++; //Importante se imprime primero el 1 y después se va incrementando
    }
echo "<br><br>";

//DO: La condicion se ejecuta al final. OJO la condicion al menos se ejecuta una vez el bucle
echo "Con bucle DO <br>";
$j = 1;
do{
    echo $j." "; //Primero se imprime 
    $j++; //Después se incrementa
}while($j <= 100);

echo "<br><br>";
$j = 0;
do{
    $j++; //Primero se incrementa
    echo $j." "; //Después se imprime 
}while($j < 100)
?>