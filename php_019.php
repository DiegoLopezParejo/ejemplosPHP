<!-- Operadores de comparación que son usaos en la condición de las estrucuturas condicionales
== : igual
!= : diferente
>, <, >=, <= 
-->
<?php
    $nota = 7;
    if($nota >= 0 && $nota < 5){
        echo "La nota $nota es suspenso";
    }elseif($nota >= 5 && $nota < 6){
        echo "La nota $nota es suficiente";
    }elseif($nota >= 6 && $nota < 7){
        echo "la nota $nota es bien";
    }elseif($nota >= 7 && $nota < 9){
        echo "La nota $nota es notable";
    }elseif($nota >= 9 && $nota <= 10){
        echo "la nota $nota es sobresaliente";
    }else{
        echo "la nota no es valida";
    }
?>