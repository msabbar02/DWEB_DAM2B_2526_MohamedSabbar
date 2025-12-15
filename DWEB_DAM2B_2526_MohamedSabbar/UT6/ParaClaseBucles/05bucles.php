<?php
include("cabezera.php");
$precio = 16;
$cantidadLibros = 0;
$cantidadDinero = 250;
echo "<ol>";
for ($i = $precio; $i < $cantidadDinero; $i += $precio) {
    $cantidadLibros++;
    echo "<li>";
    echo $i;
    echo "</li>";
}
echo "</ol>";
echo "Por {$cantidadDinero}€ , se pueden comprar {$cantidadLibros} libros. ";
include("pie.php");
?>