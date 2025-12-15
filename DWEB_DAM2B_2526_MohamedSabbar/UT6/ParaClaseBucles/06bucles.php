<?php
  include("cabezera.php");
  echo "<h3>Generando casillas de verificación</h3>\n";
echo "<form action='#' method='get' >";
echo "<div>";
$casilla = "Casilla";
for ($i = 1; $i <= 10; $i++) {
    echo "<input type='checkbox' name='{$casilla}{$i}' value='{$i}'/>{$casilla}{$i} <br>";
}
echo "</div></form>";
  include("pie.php");
?>