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
                $puntos = 200;
                $existe = false;
                $bon;

                if($existe == true) {
                    $bon = 100;
                    $total = $puntos + $bon;
                    echo"Puntos iniciales : {$puntos}<br>";
                    echo"Con Bonificacion de  : {$bon}<br>";
                    echo"Puntos totales : {$total}<br>";
                } else {
                    $bon = 0;
                    $total = $puntos + $bon;
                    echo"Puntos iniciales : {$puntos}<br>";
                    echo"Con Bonificacion de  : {$bon}<br>";
                    echo"Puntos totales : {$total}<br>";
                }
            ?>
        </div>
        <div id="pie">Implantaci&oacute;n de aplicaciones web</div>
    </div>
</body>

</html>