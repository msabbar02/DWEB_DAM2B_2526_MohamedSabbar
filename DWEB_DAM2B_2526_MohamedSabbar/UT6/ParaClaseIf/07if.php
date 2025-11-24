<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <link rel="stylesheet" type="text/css" href="css/estilo.css" />
    <title>Ejemplos con if / switch</title>
</head>

<body>
    <div id="contenido">
        <div id="cabecera">
            <h2>Ejemplos con if / switch</h2>
        </div>
        <div id="principal">
            <?php
              $numeroAleatorio = rand(1,100);
              $intento = 23;

              if ($numeroAleatorio < $intento) {
                echo"Su intento: {$intento}<br>";
                echo"El intento es mas alto que el nº secreto<br>";
                echo "<a href='http://localhost:8080/DWEB_DAM2B_2526_MohamedSabbar/DWEB_DAM2B_2526_MohamedSabbar/UT6/tarea3/07if.php'>Recargar</a>";
              }elseif($numeroAleatorio > $intento) {
                echo"Su intento: {$intento}<br>";
                echo"El intento es mas bajo que el nº secreto<br>";
                echo "<a href ='http://localhost:8080/DWEB_DAM2B_2526_MohamedSabbar/DWEB_DAM2B_2526_MohamedSabbar/UT6/tarea3/07if.php'>Recargar</a>";
              }else{
                echo "Has ganado";
              }
            ?>
        </div>
        <div id="pie">Implantaci&oacute;n de aplicaciones web</div>
    </div>
</body>

</html>