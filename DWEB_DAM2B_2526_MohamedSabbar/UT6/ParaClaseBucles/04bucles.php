<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <link rel="stylesheet" type="text/css" href="css/estilo.css" />
    <title>Ejemplos con PHP - sentencias repetitivas</title>
</head>

<body>
    <div id="contenido">
        <div id="cabecera">
            <h2>Ejemplos con PHP - sentencias repetitivas</h2>
        </div>
        <div id="principal">
            <?php
            echo"<h3>Generador de enlaces: </h3>";
            for ($i = 1; $i <= 10; $i++) {
                echo "<a href='#'>Enlace {$i}</a><br>";
            }
            ?>
        </div>
        <div id="pie">Implantaci&oacute;n de aplicaciones web</div>
    </div>
</body>

</html>