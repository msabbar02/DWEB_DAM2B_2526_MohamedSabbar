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
                $nombre = "Mohamed Sabbar";
                $hora = date("H");
                if($hora > 00 && $hora <= 12){
                    echo"Buenos Dias ".$nombre." es ".$hora." de la mañana.";
                }elseif($hora > 12 && $hora <= 20){
                    echo "Buenas Tardes ".$nombre." es ".$hora." de la tarde.";
                }else{
                    echo "Buenas Noches ".$nombre." es ".$hora." de la noche.";
                }
            ?>
        </div>
        <div id="pie">Implantaci&oacute;n de aplicaciones web</div>
    </div>
</body>

</html>