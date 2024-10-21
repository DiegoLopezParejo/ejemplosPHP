<?php
//defined me dice si la variable está definida. El . en print es concatenar
    if (defined("CIUDAD")){ //aqui no está definida
        print("La ciudad es :" .CIUDAD);
    };