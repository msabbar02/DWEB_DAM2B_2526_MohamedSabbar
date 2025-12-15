<?php
include("cabezera.php");
echo "<h3>Generando botones</h3>\n";
echo "<form id='form' action='#' method='get' >";
echo "<div>";
for ($i = 1; $i <= 10; $i++) {
    echo "<label> Botón {$i}</label>
    <input type='submit' name='el_nombre_del_botón' value ='Editar' />
    <input type='submit' name='el_nombre_del_botón' value ='Borrar' /> <br>";
}
echo "</div></form>";
include("pie.php");
?>