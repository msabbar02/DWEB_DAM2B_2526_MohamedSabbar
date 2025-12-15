<?php
include("includes/cabecera.php");
include("./funciones.php");
$jugador1 = array(
    "nombre" => "Messi",
    "sueldo" => 20,
    "goles" => 18,
);
$jugador2 = array(
    "nombre" => "Iniesta",
    "sueldo" => 15,
    "goles" => 16,
);
$jugador3 = array(
    "nombre" => "Neymar",
    "sueldo" => 17,
    "goles" => 14,
);
$jugador4 = array(
    "nombre" => "Puyol",
    "sueldo" => 9,
    "goles" => 6,
);
$jugadores = [
    "Jugador 1" => $jugador1,
    "Jugador 2" => $jugador2,
    "Jugador 3" => $jugador3,
    "Jugador 4" => $jugador4
];

verArray($jugadores);
echo "<div class='jugador'>";
foreach ($jugador2 as $key => $value) {
    echo $key . ": " . $value . "<br>";
}
echo "</div>";

echo "<h3>El sueldo de {$jugador3['nombre']} es : " . $jugador3['sueldo'] . " milliones de €</h3>";
$totalGoles = 0;
foreach ($jugadores as $key => $value) {
    $totalGoles += $value['goles'];
}

echo '<h3>Total goles: ' . $totalGoles . '</h3>';
$totalSueldos = 0;
foreach ($jugadores as $jugador) {
 
    $totalSueldos += $jugador['sueldo'];
    
};

echo "<h3>Total sueldos : {$totalSueldos} <br></h3>";
$mediaSueldos = $totalSueldos / count($jugadores);
echo "<h3>Media sueldos : {$mediaSueldos} milliones de €.<br></h3>";

echo "<table>";
echo "<td></td>";
foreach ($jugador as $key => $value) {
    echo "<td>{$key}</td>" ;
}
foreach ($jugadores as $key => $value) {

    echo "<tr>";
    echo"<td>{$key}</td>";
    foreach($value as $key2 => $value2) {
        echo "<td>{$value2}</td>";
    }
    echo "</tr>";
}
echo "</table>";

include("Includes/pie.php");
?>