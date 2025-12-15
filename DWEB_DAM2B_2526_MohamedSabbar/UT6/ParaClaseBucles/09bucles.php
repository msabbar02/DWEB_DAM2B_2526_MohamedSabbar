<?php
include("cabezera.php");
echo "<h3>Generando tabla de multiplicar hasta un nº</h3>\n";
echo "<h4>tabla de multiplicar hasta el 8</h4>\n";
$multiplicador = 8;
echo "<table>";
echo "<tr>
    <th>X</th>
    <th>1</th>
    <th>2</th>
    <th>3</th>
    <th>4</th>
    <th>5</th>
    <th>6</th>
    <th>7</th>
    <th>8</th>
    <th>9</th>
    <th>10</th>
    </tr>";

for ($i = 1; $i <= $multiplicador; $i++) {



    echo "<tr>";
    echo "<td>";
    echo "{$i}";
    echo "</td>";
    for ($j = 1; $j <= 10; $j++) {
        $total = $i * $j;

        echo "<td>";
        echo "{$total}";
        echo "</td>";

    }
    echo "</tr>";

}




echo "</table>";
include("pie.php");
?>