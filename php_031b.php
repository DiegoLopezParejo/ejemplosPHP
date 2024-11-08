<!-- Igual que en anterior pero comprobando si esta declarada la variable-->
<?php
$ciudades = ["Talavera"];

if(isset($ciudades[1])){
    echo $ciudades[1];
}else{
    echo "La ciudad no está especificada";
}
?>