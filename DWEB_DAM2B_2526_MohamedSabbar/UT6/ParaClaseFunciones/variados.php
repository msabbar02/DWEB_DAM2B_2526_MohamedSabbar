<?php

include("includes/cabecera.php");

function lineaHorizontal(){
    echo"<hr>";
}
function calcularPrecioFinal(float $precio, float $descunto)
{
    $precioDescuentado = $precio * ($descunto / 100);
    $precioFinal = $precio - $precioDescuentado;
    return number_format($precioFinal, 2);
}

function diaSemana($dia)
{
    if ($dia == 1) {
        return "Lunes";
    } elseif ($dia == 2) {
        return "Martes";
    } elseif ($dia == 3) {
        return "Miercoles";
    } elseif ($dia == 4) {
        return "Jueves";
    } elseif ($dia == 5) {
        return "Viernes";
    } elseif ($dia == 6) {
        return "Sabado";
    } elseif ($dia == 7) {
        return "Domingo";
    } else {
        return "Incorrecto.";
    }
}

function totalSegundos($hora, $minutos)
{
    $segundosHora = $hora * pow(60, 2);
    $segundosEnMinutos = $minutos * 60;
    $totalSegundos = $segundosHora + $segundosEnMinutos;
    return $totalSegundos;
}

function nombreGenero($nombre)
{
    $nombreEnMayuscla = strtoupper($nombre);
    if ($nombreEnMayuscla == "TER") {
        return "TERROR";
    } elseif ($nombreEnMayuscla == "COM") {
        return "COMEDIA";
    } elseif ($nombreEnMayuscla == "DRA") {
        return "DRAMA";
    } elseif ($nombreEnMayuscla == "FIC") {
        return "CIENCIA FINCCIÓN";
    } elseif ($nombreEnMayuscla == "ROM") {
        return "ROMÁNTICA";
    } else {
        return $nombreEnMayuscla . "Nombre no conocido.";
    }
}
// variables 
$precio = 456;
$descuento = 6;
$dia = 6;
$horas = 3;
$minutos = 36;
$palabra = "fic";
echo"
Precio: {$precio}€<br>
Descuento: {$descuento}%<br>
Precio Final con descuento:" .calcularPrecioFinal($precio,$descuento)."€";
lineaHorizontal();
echo "El dia correspondiente al nº {$dia} es ". diaSemana($dia);
lineaHorizontal();
echo "{$horas} hora y {$minutos} minutos son ". totalSegundos($horas,$minutos). " segundos.";
lineaHorizontal();
echo "El genero correspondiente a '{$palabra}' es ". nombreGenero($palabra);



include("includes/pie.php")

    ?>