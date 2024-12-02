<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Edades de las personas</h2>
    <?php
    $edad = ["Pedro" => 35, "Juan" => 37, "Ana" => 25];

    foreach ($edad as $nombre => $años) {
        echo "Nombre: $nombre Edad: . $años <br>";
    }

    echo "<pre>";
        print_r($edad);
    echo "</pre>";
    ?>
</body>
</html>