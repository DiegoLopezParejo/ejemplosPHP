<!-- Imprimir del 10 al 200 de 20 en 20 con for, while y do while-->
<?php
    $i = 10;
    while($i <= 200){
        echo $i." ";
        $i+=20; //Importante se imprime primero el 1 y después se va incrementando
    }
echo "<br><br>";
    for($i = 10; $i <= 200; $i+=20){
        echo $i." ";
    }
echo "<br><br>";
$i = 10;
do{
    echo $i." ";
    $i+=20; //Importante se imprime primero el 1 y después se va incrementando
}
while($i <= 200);
?>