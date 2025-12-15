<?php
include("includes/cabecera.php");
include("funciones.php");
    $libro1 = array(
        "ISBN"=> "123456-A",
        "TITULO"=> "El asedio",
        "AUTOR"=> "Autor péres Reverte",
        "PRECIO"=> 22.5,
    );
    echo"<h3>Datos de un libro </h3>";
    foreach ($libro1 as $key => $value) {
        echo $key ." - ". $value . "<br>";
    }

    $libro2 = array(
        "ISBN"=> "12222-N",
        "TITULO"=> "La reina del sur",
        "AUTOR"=> "Autor péres Reverte",
        "PRECIO"=> 20,
    );

    $libro3 = array(
        "ISBN"=> "111116-A",
        "TITULO"=> "El maestro de esgrima",
        "AUTOR"=> "Autor péres Reverte",
        "PRECIO"=> 9,
    );

    $libros = [
        "libro1"=> $libro1,
        "libro2"=> $libro2,
        "libro3"=> $libro3
    ];

    verArray($libros);
    var_dump($libros);
    echo"<br><br>";
    echo"<h3>Mostrando array Libros usando foreach</h3>";
    $lineaHorizontal = "<hr>";

    foreach ($libros as $key => $value) {
        foreach ($value as $key2 => $value2) {
            echo $key2 ." - ". $value2 ."<br>";
        }
        echo $lineaHorizontal;
    }

include("includes/pie.php");
?>