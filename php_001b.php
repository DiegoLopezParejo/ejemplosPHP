<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <table style="border: 1px solid black;">
        <tr >    
            <th style="border: 1px solid black;">Tipo</th>
            <th>Ventajas</th>
            <th>Inconvenientes</th>
        </tr>
        <tr>    
            <td>A</td>
            <td>Más Rapido</td>
            <td>Mas caro</td>
        </tr>
        <tr>    
            <td>B</td>
            <td>Más Barato</td>
            <td>Mas Lento</td>
        </tr>
    </table>
    <h1>21</h1>
    <h2>Aqui termina el HTML</h2>
    <hr>
</body>
</html>

<?php
    $edad = 21;
    print($edad);
    echo '<br>'; //imprimo una linea en blanco, para poner html en php se hace con echo '' o con print('')
    echo '<h1>';
    echo $edad;
    echo '</h1>';
    $nombre = "Diego";//asignamos Diego a la variable nombre
    print($nombre);
//se pone porque se mezcla php y html?>