<?php
include("includes/cabecera.php");
include("funciones.php");
  $alumnos = array("Ana","Pedro","Luis","Esteban","Maite","Isabel");
  verArray($alumnos);
  $alumnos[] ="Juan Luis";
  verArray($alumnos);
  $totalAlumnos = count($alumnos);
  echo "Total alumnos en clase {$totalAlumnos}<br>";

  foreach($alumnos as $alumno){
    echo $alumno." ";
  }

  $notas = array(
    "Ana" => 5,
    "Pedro" => 4,
    "Luis"=> 7,
    "Esteban"=> 8,
    "Maite"=> 5,
    "Isabel"=> 4.5
  );

  verArray($notas);
  $aprobados = 0;
  $suma = 0;
  $totalAlumnos = count($notas);
  foreach($notas as $key => $value){
    echo $key." - ".$value."<br>";
    $suma += $value;
    if($value >= 5){
        $aprobados++;
    }
  }
  $notaMedia = number_format($suma/$totalAlumnos,2);
  echo "Total aprobados : {$aprobados}<br>";
  echo"Nota media del curso: {$notaMedia}<br>";


  echo "Ordenar descendente de nombre (las claves)<br>";
  krsort($notas);
  foreach($notas as $key => $value){
    echo $key." - ".$value."<br>";
  }

  echo "Ordenar ascendente segun las notas (las valores)<br>";
  asort($notas);
  foreach($notas as $key => $value){
    echo $key." - ".$value."<br>";
  }

  include("includes/pie.php");
?>