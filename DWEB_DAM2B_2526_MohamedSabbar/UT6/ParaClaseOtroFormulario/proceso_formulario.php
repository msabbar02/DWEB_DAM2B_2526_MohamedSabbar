<?php
     include "cabecera.php";
     require_once 'utilidades.php';
     
     
    
     // Iniciamos la cadena resultado envolviéndola en el div con la clase CSS correspondiente
     $resultado = "<div class='resultado'>";
     $resultado .= "<h3>Datos introducidos por el usuario</h3>";
     
     // 1. Procesar Nombre y Apellido 
     $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
     $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : "";
     
     if (!empty($nombre) && !empty($apellido)) {
         $nombre_formateado = substr($nombre, 0, 1) . ". " . strtoupper($apellido);
         $resultado .= "Nombre y apellidos: " . $nombre_formateado . "<br>";
     } else {
         $resultado .= "Nombre y apellidos: Desconocido<br>";
     }

     // 2. Procesar Fecha de nacimiento
     $dia = $_POST['dia'];
     $mes = $_POST['mes'];
     $anio = $_POST['anio'];
     $resultado .= "Fecha nacimiento: $dia/$mes/$anio<br>";

     // 3. Procesar Situación Laboral (Radio Button)
     if (isset($_POST['situacion'])) {
         $resultado .= "Situación laboral: " . $_POST['situacion'] . "<br>";
     } else {
         $resultado .= "No ha seleccionado su situación laboral<br>";
     }

     // 4. Procesar Perfil Profesional (Select Múltiple - devuelve un Array)
     if (isset($_POST['perfil'])) {
         // Unimos los elementos del array con un espacio
         $perfiles_seleccionados = implode(" ", $_POST['perfil']); 
         $resultado .= "Perfil profesional: " . $perfiles_seleccionados . "<br>";
     } else {
         $resultado .= "No ha seleccionado su perfil profesional<br>";
     }

     // 5. Procesar Nivel de estudios (Select Simple - Convertir a mayúsculas)
     if (isset($_POST['nivel'])) {
         $resultado .= "Nivel de estudios: " . strtoupper($_POST['nivel']) . "<br>";
     }

     // 6. Procesar Idiomas (Checkbox - devuelve un Array)
     if (isset($_POST['idiomas'])) {
         $idiomas_seleccionados = implode(" ", $_POST['idiomas']);
         $resultado .= "Idiomas que conoce: " . $idiomas_seleccionados . "<br>";
     } else {
         $resultado .= "No ha seleccionado ningún idioma<br>";
     }

     // Cerramos el div resultado
     $resultado .= "</div>";

     // Mostramos el resultado final acumulado en la variable
     echo $resultado;
     
     include "pie.php";
?>