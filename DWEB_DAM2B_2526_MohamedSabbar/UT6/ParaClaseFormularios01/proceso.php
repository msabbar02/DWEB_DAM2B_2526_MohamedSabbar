<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="estilo.css" />
    <title>Formulario datos personales</title>
</head>

<body>
    <div id="contenido">
        <?php
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";

        $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
        $clave = isset($_POST['clave']) ? $_POST['clave'] : '';
        $sexo = isset($_POST['sexo']) ? $_POST['sexo'] : '';
        $edad = isset($_POST['edad']) ? $_POST['edad'] : '';

        $vivienda = isset($_POST['vivienda']) ? $_POST['vivienda'] : 'No marcado';
        $trabajo = isset($_POST['trabaja']) ? $_POST['trabaja'] : 'No marcado';
        $mus = isset($_POST['mus']) ? $_POST['mus'] : 'No marcado';

        $comentarios = isset($_POST['comentarios']) ? $_POST['comentarios'] : '';
        $pais = isset($_POST['pais']) ? $_POST['pais'] : '';

        
        $colores = isset($_POST['colores']) ? $_POST['colores'] : [];

        echo "El usuario ha introducido esta info :<br>";
        echo "Nombre : $usuario<br>";
        echo "Password : $clave <br>";
        echo "Sexo : $sexo<br>";
        echo "Edad : $edad<br>";
        echo "Vivienda : $vivienda<br>";
        echo "Trabajo : $trabajo<br>";
        echo "Juegos : $mus<br>";
        echo "Comentarios : $comentarios<br>";
        echo "Pais : $pais<br>";
        echo "Sus colores favoritos: ";
        if (!empty($colores)) {
            foreach ($colores as $color) {
                echo $color . " ";
            }
        } else {
            echo "No ha seleccionado ninguno";
        }
        ?>

    </div>
</body>

</html>