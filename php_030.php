<!-- escribe los 100 primeros numeros primos-->
<!-- Si un numero es divisible por un numero mayor que su mitad, obligatoriamente lo es por un número menor que su mitad.
 Por lo tanto, si un número es menor que su mitad, basta con comprobar hasta la mitad de sus divisores -->

 <?php
    for($i = 2; $i <= 100; $i++){
        if ($i == 2 || $i == 3) {
            echo "El número $i es primo <br>";
            continue;
        }
        $esPrimo = true; // Asumimos que $i es primo
        for($j = 2; $j <= $i/2; $j++){
            if($i % $j == 0){
                $esPrimo = false; // $i no es primo
                break; // Sale del bucle si encuentra un divisor
            }
        }
        if ($esPrimo) {
            echo "El número $i es primo <br>";
        }
    }
?>
