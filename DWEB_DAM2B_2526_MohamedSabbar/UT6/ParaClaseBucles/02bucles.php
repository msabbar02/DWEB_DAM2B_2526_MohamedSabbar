<?php
include("cabezera.php");
define("ALUMNOS", 10);
echo "<h3>Simulando notas de una clase y contando aprobados </h3>";
$aprobado = 0;
$suspenso = 0;

for ($i = 1; $i <= ALUMNOS; $i++) {
    $nota = rand(1, 10);
    if ($nota >= 5) {
        $aprobado++;

    } else {
        $suspenso++;

    }
}
echo "Numero de Alumnos Aprobados: {$aprobado}<br>";
echo "Numero de Alumnos Suspendidos: {$suspenso}";

include("pie.php");
?>