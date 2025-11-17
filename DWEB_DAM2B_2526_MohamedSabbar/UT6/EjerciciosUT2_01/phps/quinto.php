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
                
                define("DESCUENTO","25");
                define("IVA","8");
                $precio = 234.89;
                $precioDescuento = $precio * (DESCUENTO /100);
                $precioConDescuento = $precio - $precioDescuento;
                $precioIva = $precioConDescuento * (IVA /100);
                $precioFinal = $precioConDescuento + $precioIva;
                echo "
                    <h3>Variables y tipos de datos</h3>
                    <p>____________________________________________</p>
                    <h4>Datos de un alumno </h4>
                    <table>
                        <caption>Datos de un Producto</caption>
                        <tr>
                        <td>Precio producto</td>
                        <td>{$precio}€</td>
                        </tr>
                        <tr>
                        <td>Descuento 25%</td>
                        <td>{$precioDescuento}€</td>
                        </tr>
                        <tr>
                        <td>Precio con descuento</td>
                        <td>{$precioConDescuento}€</td>
                        </tr>
                        <tr>
                        <td>Iva 8%</td>
                        <td>{$precioIva}€</td>
                        </tr>
                        <tr>
                        <td>Precio final</td>
                        <td>{$precioFinal}€</td>
                        </tr>
                    </table>
                ";
            ?>
        </div>
         <div id="pie">Implantaci&oacute;n de aplicaciones web</div>
        </div>
    </body>
</html>