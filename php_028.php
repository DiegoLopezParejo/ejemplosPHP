<!-- Haz una tabla con las cinco primeras potencias de los cinco primeros números -->

<?php
    for($i = 1; $i <= 5; $i++){
        echo "<h3>Tabla del $i</h3>";
        for($j = 1; $j <= 5; $j++){
                $res = $i ** $j;
                echo "$i elevado $j = $res <br>";
        }
}
?>