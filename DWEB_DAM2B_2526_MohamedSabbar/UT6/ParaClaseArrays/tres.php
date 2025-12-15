<?php
include("includes/cabecera.php");
    include("funciones.php");
    $nombreBarrio = "ITURRAMA";
    $codigoBarrio = queCodigoPostalTiene($nombreBarrio);
    echo "Codigo postal de {$nombreBarrio} : {$codigoBarrio}";
    echo "<hr>";
    $barrio2 = "ROCHAPEA";
    $codigoBarrio2 = queCodigoPostalTiene($barrio2);
    echo "Codigo postal de {$barrio2} : {$codigoBarrio2}";
    include("includes/pie.php");
?>