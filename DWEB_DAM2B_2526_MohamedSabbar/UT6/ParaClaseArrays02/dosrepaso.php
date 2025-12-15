<?php
  include("includes/cabecera.php");
include("./funciones.php");
  $productos = [
    "leche" => 1.95,
    "libro" => 23,
    "pan" => 1.80,
    "martillo" => 17,
    "toalla" => 25,
    "gafas" => 257.89
  ];
  asort($productos);
  verArray($productos);

  echo"<h3>Productos con precio menor de 20€</h3>";
  echo"<table>";
  foreach($productos as $key => $value){
     if($value <= 20){
        echo "<tr><td>{$key}</td></tr>";
     }
  }
  echo"</table>";

  include("includes/pie.php");
?>