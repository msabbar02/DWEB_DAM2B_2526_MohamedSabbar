<?php
    $name = "Mohamed Sabbar";
    $suma = 0;
    for ($i = 0; $i < 8; $i++) {
        $dado = rand(1,6);
        $suma += $dado;
    }
    include"./vistas/vista_resultado.php";
?>