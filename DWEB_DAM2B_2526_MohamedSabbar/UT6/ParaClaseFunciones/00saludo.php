<?php
      
      include "includes/cabecera.php";
      function saludar() {
            echo"Hola esto es un saludo sin parametros<br> ";
      }
      function saludarPersonalizado(string $nombre) {
            echo "Hola {$nombre},cómo estás?";
      }
      echo"Primer saludo<br>";
      saludar();
      echo "Segundo saludo<br>";
      saludar();
      echo "Tercer saludo personalizado<br>";
      saludarPersonalizado("Mohamed");
      echo "<hr>";
      $i = 1;
      while($i <= 7){
            echo "Saludo {$i}: ";
            saludar() ;
            $i++;
      }
      
      include "includes/pie.php";  
     
?>
