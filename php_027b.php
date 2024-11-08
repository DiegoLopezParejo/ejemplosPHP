
<?php
echo "<style>
    .table-container{
        margin: 10px auto;
        border: 2px solid green; 
        border-collapse: collapse; 
        text-align: center;
    }

    .cell{
        border: 2px solid green; 
        padding: 5px;
    }
</style>";

//Con for y poniendo bordes a la tabla, pero ahora pondremos el style en una etiqueta style aparte
    for($i = 1; $i <= 10; $i++){
        echo "<table class = 'table-container'><tr><th colspan = '5' >Tabla del $i</th></tr>";       
            for($j = 1; $j <= 10; $j++){
                    $res = $i * $j;
                   echo "<tr>
                        <td class = 'cell'>$i</td>
                        <td class = 'cell'>x</td>
                        <td class = 'cell'>$j</td>
                        <td class = 'cell'>=</td>
                        <td class = 'cell'>$res</td>                    
                   </tr>";
            }
        echo "</table><br>";        
    }
?>