<?php
    // funcion isset Devuelve 1 si está definida la variable. 0 en caso contrario
    // Comprueba si una variable está definida y no es NULL
    //El valor NULL representa una variable SIN VALOR
$var1 = 4;
if(isset($var1)){
    print("La variable var1 esta inicializada y no es null. Su valor es:  $var1");
}else{
    print("La variable var1 no esta inicializada");
}
echo "<br>";
$var2 = null;
if(isset($var2)){
    print("La variable var1 esta inicializada y no es null. Su valor es:  $var2");
}else{
    print("La variable var2 no esta defnida y su valor es NULL");
}
?>