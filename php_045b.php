<!-- Se necesita almacenar las notas de IAW, ASGBD Y SAD de varios estudiantes. Crea la estructura y la nota media -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border: 2px solid black;
            border-collapse: collapse;
        }
        th,td{
            border: 2px solid black;
        }
    </style>
 </head>
 <body>
    <?php
        $alumnos = [
            "Carlos" => ["IAW" => 5, "ASGBD" => 6, "SAD" => 3],
            "Pepe" => ["IAW" => 5, "ASGBD" => 6, "SAD" => 3],
            "Marta" => ["IAW" => 5, "ASGBD" => 6, "SAD" => 3],
            "Ana" => ["IAW" => 9, "ASGBD" => 9, "SAD" => 9]
        ];
        echo "<table>
                <tr>
                    <th></th>
                    <th>Nota IAW</th>
                    <th>Nota ASGBD</th>
                    <th>Nota SAD</th>
                </tr>";
        foreach($alumnos as $nombre => $notas){
            echo "<tr>";
                echo "<td>$nombre".": </td>"; //Imprimimos el nombre
                echo "<td>".$notas["IAW"]. "</td>"; //Contenido del array notas en la posicion IAW
                echo "<td>".$notas["ASGBD"]."</td>"; //Contenido del array notas en la posicion ASGBD
                echo "<td>".$notas["SAD"]."</td>"; //Contenido del array notas en la posicion SAD
            echo "</tr>";
        }
        echo "</table>";
    ?>
 </body>
 </html>