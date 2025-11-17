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
              //http://localhost:8080/DWEB_DAM2B_2526_MohamedSabbar/DWEB_DAM2B_2526_MohamedSabbar/UT6/EjerciciosUT2_01/sexto.php
              $hora = date("H:m:s");
              $fecha = date("M d,Y");
              $link = "http://localhost:8080/DWEB_DAM2B_2526_MohamedSabbar/DWEB_DAM2B_2526_MohamedSabbar/UT6/EjerciciosUT2_01/sexto.php";
              echo "
                <p>Hora actual {$hora}</p>
                <p>Fecha actual {$fecha}</p>
                <a href='{$link}'>Mostrar Dado aleatorio</a>
              ";
            ?>
        </div>
         <div id="pie">Implantaci&oacute;n de aplicaciones web</div>
        </div>
    </body>
</html>
