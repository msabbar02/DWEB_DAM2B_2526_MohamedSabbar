<?php
include("includes/cabecera.php");
include("funciones.php");
$notas = [
    "PEDRO" => [
        "AWEB" => 6,
        "SEAD" => 7,
        "SERI" => 5,
        "FOL" => 4,
        "IMSO" => 8,

    ],

    "LUIS" => [
        "AWEB" => 4,
        "SEAD" => 8,
        "SERI" => 7,
        "FOL" => 8,
        "IMSO" => 9,

    ],
    "ANA" => [
        "AWEB" => 5,
        "SEAD" => 8,
        "SERI" => 7,
        "FOL" => 9,
        "IMSO" => 5,

    ],
    "JORGE" => [
        "AWEB" => 8,
        "SEAD" => 9,
        "SERI" => 7,
        "FOL" => 6,
        "IMSO" => 6,

    ]
];

echo "Jorge ha tenido en Seri : " . $notas["JORGE"]["SERI"];
echo "<br>";
$suma = 0;
foreach ($notas['ANA'] as $asig => $puntuacion) {
    $suma += $puntuacion;
}
$notaMedia = $suma / count($notas['ANA']);
echo "Nota media de Ana : " . $notaMedia;
echo "<br>";

$sumaMateria = 0;
$materia = "SEAD";
foreach ($notas as $asignatura => $puntuacion) {
    $sumaMateria += $puntuacion[$materia];
}
$notaMediaMateria = $sumaMateria / count($notas);
echo "Nota media de la materia SEAD: " . $notaMediaMateria;

echo "<br>";
echo "<table>";
echo "<tr>";
echo "<td></td>";
foreach ($notas['PEDRO'] as $asignatura => $puntuacion) {
    echo "<td>";
    echo "{$asignatura}";
    echo "</td>";
}
    
 echo"</tr>";
foreach ($notas as $alumno => $puntos) {
    echo "<tr>";
    echo "<td>";
    echo "{$alumno}";
    echo "</td>";

    foreach ($puntos as $asi => $nota) {
        echo "<td>";
        echo "{$nota}";
        echo "</td>";

    };
    echo "</tr>";
};
echo "</table>";

echo "Nombre completo de SEAD:" . nombreCompletoDe("aweb"). "<br>";
echo "Nombre completo de SERI:" . nombreCompletoDe("seri"). "<br>";

include("includes/pie.php")
?>