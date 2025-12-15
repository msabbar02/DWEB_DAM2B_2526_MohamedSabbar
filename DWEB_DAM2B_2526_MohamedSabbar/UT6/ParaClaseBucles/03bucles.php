<?php
include("cabezera.php");
echo "<h3>tabla de una fila</h3>";
echo "<table>";
echo "<tr>";
for ($i = 1; $i <= 10; $i++) {
    echo "<td>{$i}</td>";
}
echo "</tr>";
echo "</table>";

echo "<h3>Tabla de una columna</h3>";
echo "<table>";

for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    echo "<td>{$i}</td>";
    echo "</tr>";
}
include("pie.php");
echo "</table>";
?>