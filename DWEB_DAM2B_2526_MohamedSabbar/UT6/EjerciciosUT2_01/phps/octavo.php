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
               
                $numeroAleatorioA = rand(1,6);  
                $numeroAleatorioB = rand(1,6)   ;
                $link = "http://localhost:8080/DWEB_DAM2B_2526_MohamedSabbar/DWEB_DAM2B_2526_MohamedSabbar/UT6/EjerciciosUT2_01/octavo.php";

                $imagen = "images/$numeroAleatorioA.gif";
                $imagen2 = "images/$numeroAleatorioB.gif";
                
                echo"
                <img src='$imagen' alt='imagen aleatotia'>
                <img src='$imagen2' alt='imagen aleatotia'><br>
                <a href='{$link}'>Recargar</a>
                ";

            ?>  
        </div>
         <div id="pie">Implantaci&oacute;n de aplicaciones web</div>
        </div>
    </body>
</html>