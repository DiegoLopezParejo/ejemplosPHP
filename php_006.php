<?php
    //define("CIUDAD"," Madrid"); //el texto entre comillas dobles o simples
    if (defined("CIUDAD")){ 
        print("La ciudad es :" .CIUDAD);
    }else{
        print("La ciudad no está definida");//aqui entra en el else
    }
?>