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
            $valor1 = 23;
            $valor2 = 80;
            $suma = $valor1 + $valor2;
            $resta = $valor1 - $valor2;
            $producto = $valor1 * $valor2;
            $resto = $valor1 % $valor2;

            $cantidadArticulos = 12;

               echo"
               <h4>Trabajando con variables</h4>
               <p>El valor de \$valor1 es {$valor1}</p>
               <p>El valor de \$valor2 es {$valor2}</p>
               <p>La suma de {$valor1} y {$valor2} es {$suma}</p>
               <p>La resta de {$valor1} y {$valor2} es {$resta}</p>
               <p>El producto de {$valor1} y {$valor2} es {$producto}</p>
               <p>El resto de {$valor1} y {$valor2} es {$resto}</p>               
               <p>Hay actualmente {$cantidadArticulos} articulos</p>             
               <p>Ahora hay " . (++$cantidadArticulos) . " articulos</p>             
               <p>Ahora hay " . (--$cantidadArticulos) . " articulos</p>            
               <p>Ahora hay " . ($cantidadArticulos += 10) . " articulos</p>            
               ";
            ?>
        </div>
         <div id="pie">Implantaci&oacute;n de aplicaciones web</div>
        </div>
    </body>
</html>