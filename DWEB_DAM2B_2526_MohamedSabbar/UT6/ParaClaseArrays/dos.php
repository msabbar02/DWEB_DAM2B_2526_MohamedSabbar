<?php
include("funciones.php");
include("includes/cabecera.php");
  $paises = array(
    "Italia" => "Roma",
    "Francia" => "Paris",
    "Alemania" => "Berlin",
    "Grecia" => "Atenas",
    "Irlanda" => "Dublin",
    "Portugal" => "Lisboa",
    "España" => "Madrid",
    "Austria"=> "Viena"
  );

verArray($paises);
echo"<h3> Ordenar por clave: </h3>";
ksort($paises);
verArray($paises);

echo"<h3> Ordenar por valores en orden descendente: </h3>";
arsort($paises);
verArray($paises);

if(array_key_exists("Italia", $paises)){
    echo "Italia se encuentra en los países.";
}else{
    echo "Italia no se encuentra en los países.";
}

echo"<h3> Países:  </h3>";
$nombres_paises = array_keys($paises);
verArray($nombres_paises);
echo"<h3> capitales de la UE: </h3>";
$capitales = array_values($paises);
verArray($capitales);

$capital = "Roma";
$encontrado = array_search($capital,$paises);
if($encontrado !== false){
    echo "Pais: {$encontrado} Capital:  {$capital}";
}else{
    echo "No encontrado.";
}

include("includes/pie.php");
?>