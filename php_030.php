<!-- escribe los 100 primeros numeros primos-->
<!-- Si un numero es divisible por un numero mayor que su mitad, obligatoriamente lo es por un número menor que su mitad.
 Por lo tanto, si un número es menor que su mitad, basta con comprobar hasta la mitad de sus divisores -->

 <?php
    for($i = 2; $i <= 100; $i++){
        if ($i == 2 || $i == 3) {
            echo "El número $i es primo <br>";
            continue;
        }
        for($j = 2; $j <= $i/2; $j++){ //El 2 y el 3 no entran en el bucle ya que no 2 <= 1 y tampoco 3 <= 1, pero el si 5 <= 2.5 
                if($i%$j == 0){
                    break;
                }else{
                    echo "El numero $i es primo <br>";
                    break;
                }
        }
    }
 ?>