<?php

function sumar(int $num ,int $num2) : int {
    return $num + $num2;
}

function restar(int $num,int $num2) : int {
    return $num - $num2;
}

function multiplicar(int $num ,int $num2) : int {
    return $num * $num2;
}

function cuadrado(int $num) : int {
    return pow($num, 2);
}

$numero1 = 5;
$numero2 = 6;
$resultado = "Número 1: {$numero1} Número 2: {$numero2} <br>".
 "Suma: ".sumar($numero1,$numero2). "<br>".
 "Resta: ".restar($numero1,$numero2). "<br>" .
 "Producto: ".multiplicar($numero1,$numero2). "<br>" .
 "Cuadrado: ".cuadrado($numero1);
include("includes/resultado.php");

?>