<?php
  include "cabecera.php";
?>
<?php
   define("KW","0.11437");
   define("IVA","16");
   $consumo = 22;

   $sinIva = $consumo * KW;
   $sinIva = round($sinIva,2);

   $iva = $sinIva * (IVA / 100);
   $iva = round($iva,2);

   $total = $sinIva + $iva;
   $total = round($total,2);

   echo"
        <table>
            <caption>Factura Luz</caption>
            <tr>
            <td>Consumo</td>
            <td>{$consumo} KW</td>
            </tr>
            <tr>
            <td>Precio KW</td>
            <td>".KW." €</td>
             </tr>
            <tr>
            <td>Total sin Iva</td>
            <td>{$sinIva} €</td>
            </tr>
            <tr>
            <td>Iva (16%)</td>
            <td>{$iva} €</td>
            </tr>
            <tr>
            <td>Total factura</td>
            <td>{$total} €</td>
            </tr>
         </table>
   ";


?>  
<?php
    include "pie.php";
?>
