<?php

include("includes/cabecera.php");

define("INTERES","5");

function calcularCantidad(float $cantidad,float $anos){
    $interes = INTERES / 100;
    $beneficios = $cantidad * $interes * $anos;
    $nuevaCantidad = $beneficios + $cantidad;
    return number_format($nuevaCantidad,2);

}
$cantidadIncial = 1500;
$anos = 6;
echo"Cantidad inicial {$cantidadIncial}<br>";
echo "Interés: ". INTERES ."%<br>";
echo "Años: {$anos}<br>";
echo "Nueva Cantidad: ". calcularCantidad($cantidadIncial, $anos);

include("includes/pie.php");

    ?>