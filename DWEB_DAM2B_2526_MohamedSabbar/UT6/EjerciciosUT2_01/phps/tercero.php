<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
        <link rel="stylesheet" type="text/css" href="css/estilo.css" />
        <title>Primeros ejemplos con PHP</title>
    </head>
    <body>
        <div id="contenido">
        <div id="cabecera"><h2>Primeros ejemplos PHP</h2></div>
        <div id="principal">
            <?php
                $nombre = "Mohamed Sabbar";
                $edad = 23;
                $altura = 1.69;
                $modulo = "Desarrollo WEB";
                $pendientes = true;
                echo"
                <h3>Variables y tipos de datos</h3>
                <p>____________________________________________</p>
                <h4>Datos de un alumno </h4>
                <table>
                    <caption>Datos de un Alumno</caption>
                    <tr>
                    <td>Nombre</td>
                    <td>$nombre</td>
                    </tr>
                    <tr>
                    <td>Edad</td>
                    <td>$edad</td>
                    </tr>
                    <tr>
                    <td>Altura</td>
                    <td>$altura</td>
                    </tr>
                    <tr>
                    <td>Modulo</td>
                    <td>$modulo</td>
                    </tr>
                    <tr>
                    <td>Algo pendiente de primero?</td>
                    <td>$pendientes</td>
                    </tr>
                </table>
                ";
            ?>
        </div>
         <div id="pie">Implantaci&oacute;n de aplicaciones web</div>
        </div>
    </body>
</html>