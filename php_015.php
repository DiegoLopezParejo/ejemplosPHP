<?
//var_dump(var): Muestra informacion sobre una variable, incluido el tipo y valor. Es la primera toma de contacto con arrays.

$a = 22; //integer
//echo "var_dump($a).<br>"; no funciona
echo var_dump($a)."<br>";

$b = "Hola mUndo"; //string
echo var_dump($b)."<br>"; //los espacios en blanco son caracteres

$c = 22.5; //float
echo var_dump($c)."<br><br>";

$d = array("rojo", "verde", "azul");
echo var_dump($d)."<br><br>";

$e = array(22, "Hola Mundo", 22.5, array("rojo", "verde", "azul"));
echo var_dump($e)."<br><br>";

echo var_dump($a, $b); //var_dump de dos variables
?>