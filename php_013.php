<?php
    //unset:Elimina una variable o array respetando el ámbito de dicha variable.
    $var1 = 4;
    if(isset($var1)){
        print("La variable var1 esta inicializada y no es null. Su valor es:  $var1");
    }else{
        print("La variable var1 no esta inicializada");
    }
    unset($var1);//elimino la variable
    echo "<br>";
    if(isset($var1)){ 
        print("La variable var1 esta inicializada y no es null. Su valor es:  $var1");
    }else{
        print("La variable var1 no esta inicializada");
    }
?>""