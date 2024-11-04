<!-- Imprimir los numeros impares menores de 100 con un bucle while-->
 <?php
    $i = 1;
    while($i <= 100){
        if($i%2 != 0){
            echo $i." ";
        }
        $i++; //Importante se imprime primero el 1 y después se va incrementando
    }
 ?>