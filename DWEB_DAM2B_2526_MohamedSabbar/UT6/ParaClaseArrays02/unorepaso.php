<?php

  include("includes/cabecera.php");
  $numeros = [];
  while (count($numeros) < 10) {
    $numeros[] = rand(30,50);
  }

  sort($numeros);
  $pares = 0;
  $sumaImpares = 0;

  foreach ($numeros as $i => $num) {
    echo $num. " ";
    if ($num % 2 == 0) {
        $pares++;
    } else {
        $sumaImpares += $num;
    }
};
echo "<br>";
echo "Pares: " . $pares. "<br>";
echo"Suma impares: ". $sumaImpares. "<br>";


include("includes/pie.php");
?>