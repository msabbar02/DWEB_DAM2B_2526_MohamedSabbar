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
            // usamos define para variables constante.
            define("INSTITUTO","Maria Ana Sanz");
            define("HORAS","3");
            $nombre = "Mohamed Sabbar";
            $edad = 23;
            $altura = 1.69;
            $modulo = "Desarrollo Web";
            $pendientes = true;
            echo"<h3>Variables y tipos de datos - costantes</h3>
            <p>____________________________________________</p>
            <h4>Datos de un alumno </h4>
            <p>Instituto: " .INSTITUTO. "</p>
            <p>Nombre: {$nombre}</p>
            <p>Edad: {$edad}</p>
            <p>Altura: {$altura}</p>
            <p>Modulo: {$modulo}</p>
            <p>Horas: ".HORAS. "</p>
            <p>Modulo: {$pendientes}</p>";
            ?>  
                 
            
              
        </div>
         <div id="pie">Implantaci&oacute;n de aplicaciones web</div>
        </div>
    </body>
</html>