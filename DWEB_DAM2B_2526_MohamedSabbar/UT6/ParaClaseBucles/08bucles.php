<?php
include("cabezera.php");
echo "<h3>Generando tabla de multiplicar de un nº</h3>\n";
echo "<h4>tabla de multiplicar del 4</h4>\n";
$multiplicador = 4;

echo"<table>";
for ($i = 1; $i <= $multiplicador; $i++) {
    $total = $multiplicador * $i;
    echo "<tr>";
    echo "<td>";
    echo "{$multiplicador}*$i";
    echo "</td>";

    echo "<td>";
    echo "$total";
    echo "</td>";

    echo "</tr>";
}
echo"</table>";



include("pie.php");
?>