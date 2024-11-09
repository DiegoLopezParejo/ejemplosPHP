<!-- Igual que en anterior pero comprobando si esta declarada la variable-->
<!-- Mirar como meter con un bucle for valores en un array o con una propiedad si hay alguna-->
<?php
$ciudades = ["Talavera"];

if(isset($ciudades[1])){
    echo $ciudades[1];
}else{
    echo "La ciudad no está especificada";
}
?>