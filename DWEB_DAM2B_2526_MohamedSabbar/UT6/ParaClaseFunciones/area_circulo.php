<?php



function areaCirculo(float $radio)
{
    $resultado = M_PI * pow($radio, 2);
    return number_format($resultado, 2);
}

$radio = 5;
$resultado = "El área de un circulo de radio {$radio} es " . areaCirculo($radio);
include("includes/resultado.php");

?>