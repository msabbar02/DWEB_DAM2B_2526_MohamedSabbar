<?php
include("cabezera.php");
echo "<h3>Lista de Veñtas con for</h3>";
echo "<ul>";
for ($i = 1; $i <= 10; $i++) {
    echo "<li>Literacion {$i}</li>";
}
echo "</ul>";
echo "<h3>Lista de Veñtas con While</h3>";
echo "<ol>";
for ($i = 1; $i <= 10; $i++) {
    echo "<li>Literacion {$i}</li>";
}
echo "</ol>";
include("pie.php");
?>