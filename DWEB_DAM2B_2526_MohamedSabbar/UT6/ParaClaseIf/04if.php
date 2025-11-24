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
            $capital = "Alemania";
            switch ($capital) {
                case "Holanda":
                    echo "{$capital} Su capital es 'Amesterdam'";
                    break;
                case "Belgica":
                     echo "{$capital} Su capital es 'Bruxeles'";
                    break;
                case "Alemania":
                     echo "{$capital} Su capital es 'Berlin'";
                    break;
                case "Francia":
                     echo "{$capital} Su capital es 'Paris'";
                    break;
                case "Espania":
                     echo "{$capital} Su capital es 'Madrid'";
                    break;
                default:
                     echo "{$capital} no conocido..";
                    break;
            }
            ?>
        </div>
        <div id="pie">Implantaci&oacute;n de aplicaciones web</div>
    </div>
</body>

</html>