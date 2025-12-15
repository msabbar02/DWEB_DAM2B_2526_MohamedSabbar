<?php
include("cabezera.php");
echo "<h3>Generador de enlaces: </h3>";
for ($i = 1; $i <= 10; $i++) {
    echo "<a href='#'>Enlace {$i}</a><br>";
}
include("pie.php");
?>