<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller PHP: Clean Code, Clean Data</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <div class="container">
        <h1>Manipulación de Cadenas en PHP</h1>

        <div class="ticket priority-high">
            <div class="ticket-header">
                <span>Ticket #001: Formulario de Registro</span>
                <span class="badge bg-red">Alta Prioridad</span>
            </div>
            <div class="ticket-body">
                <div class="instructions">
                    <strong>Requerimiento:</strong>
                    1. Limpia espacios sobrantes.
                    2. Convierte a formato "Nombre apellido" (primera mayúscula).
                    3. Genera usuario: todo minúsculas sin espacios.
                </div>

                <?php
                // --- DATOS DE ENTRADA ---
                $nombreEntrada = "  jUaN pÉrEz  ";
                ?>

                <div class="console">
                    <span class="label">Entrada: "<?php echo $nombreEntrada; ?>"</span>
                    <hr>

                    <?php
                    // ---------------------------------------------------
                    // TODO: ESCRIBE TU CÓDIGO AQUÍ
                    // ---------------------------------------------------
                    
                    // 1. Limpiar espacios sobrantes.
                    $limpio = trim($nombreEntrada);

                    // 2. convertir todo a minisculas 
                    $mini = strtolower($limpio);

                    // 3.primer letra en mayuscualas 
                    $mays = mb_convert_case($mini, MB_CASE_TITLE);


                    $nombreFormateado = $mays;// Sustituir
                    $username = str_replace(' ', '', strtolower($nombreFormateado));// Sustituir
                    

                    // ---------------------------------------------------
                    // SALIDA (No tocar HTML, solo las variables PHP)
                    // ---------------------------------------------------
                    echo "Nombre formateado: <strong>$nombreFormateado</strong><br>";
                    echo "Username generado: <strong>$username</strong>";
                    ?>
                </div>
            </div>
        </div>

        <div class="ticket priority-med">
            <div class="ticket-header">
                <span>Ticket #002: Sistema de Etiquetas</span>
                <span class="badge bg-orange">Media Prioridad</span>
            </div>
            <div class="ticket-body">
                <div class="instructions">
                    <strong>Requerimiento:</strong>
                    1. Separa las etiquetas (explode).
                    2. Limpia espacios y convierte a minúsculas cada una.
                    3. Únelas con guiones (-) para formar una URL amigable (slug).
                </div>

                <?php
                // --- DATOS DE ENTRADA ---
                $tagsInput = "Tecnología, php , DESARROLLO WEB,  backend";
                ?>

                <div class="console">
                    <span class="label">Entrada: "<?php echo $tagsInput; ?>"</span>
                    <hr>

                    <?php
                    // ---------------------------------------------------
                    // TODO: ESCRIBE TU CÓDIGO AQUÍ
                    // ---------------------------------------------------
                    
                    // 1. separar las etiquetas
                    $separado = explode(",", $tagsInput);

                    // 2. limpiar espacios del array y pasarla a minisculas
                    
                    $limpias = [];
                    foreach ($separado as $etiqueta) {
                        $limpia = trim(strtolower($etiqueta));
                        $limpias[] = $limpia;
                    }

                    $slugFinal = implode("-", $limpias); // Sustituir
                    // ---------------------------------------------------
                    echo "Slug URL: <strong>$slugFinal</strong>";
                    ?>
                </div>
            </div>
        </div>

        <div class="ticket priority-crit">
            <div class="ticket-header">
                <span>Ticket #003: Limpieza y Seguridad</span>
                <span class="badge bg-purple">Crítica</span>
            </div>
            <div class="ticket-body">
                <div class="instructions">
                    <strong>Requerimiento:</strong>
                    1. Elimina etiquetas HTML (seguridad).
                    2. Elimina barras invertidas (\) sobrantes.
                    3. Convierte caracteres especiales a entidades HTML.
                    4. Valida: Si longitud < 10, muestra error. </div>

                        <?php
                        // --- DATOS DE ENTRADA ---
                        $comentarioInput = "<script>alert('Hack');</script> Me gusta mucho el post, pero It\'s complicated.";
                        ?>

                        <div class="console">
                            <span class="label">Entrada (Raw): <?php echo htmlspecialchars($comentarioInput); ?></span>
                            <hr>

                            <?php
                            // ---------------------------------------------------
                            // TODO: ESCRIBE TU CÓDIGO AQUÍ
                            // ---------------------------------------------------
                            
                            // eliminar etiquetas html
                            $sinhtml = strip_tags($comentarioInput);
                            // eliminar barras invertidas 
                            $sinbarras = stripcslashes($sinhtml);
                            // convertir caracteres especiales
                            $convertido = htmlspecialchars($sinbarras,ENT_QUOTES);

                            if (strlen($convertido) < 10 ) {
                                $comentarioSeguro = "Error...";
                            }else{

                                $comentarioSeguro = $convertido;
                            }

                            // ---------------------------------------------------
                            // SALIDA
                            // ---------------------------------------------------
                            // Nota: Tu código debe decidir si mostrar el comentario o el error
                            // Ejemplo simple de visualización:
                            echo "Resultado: <strong>$comentarioSeguro</strong>";
                            ?>
                        </div>
                </div>
            </div>

            <div class="ticket priority-med">
                <div class="ticket-header">
                    <span>Ticket #004: Filtro de Palabras</span>
                    <span class="badge bg-orange">Media Prioridad</span>
                </div>
                <div class="ticket-body">
                    <div class="instructions">
                        <strong>Requerimiento:</strong>
                        1. Busca la palabra prohibida (insensible a mayúsculas/minúsculas).
                        2. Si existe: Reemplázala por ****** y muestra el índice donde apareció.
                        3. Si no existe: Muestra la frase original.
                    </div>

                    <?php
                    // --- DATOS DE ENTRADA ---
                    $frase = "Este producto es una BASURA y no sirve";
                    $prohibida = "basura";
                    ?>

                    <div class="console">
                        <span class="label">Frase: "<?php echo $frase; ?>" | Prohibida:
                            "<?php echo $prohibida; ?>"</span>
                        <hr>

                        <?php
                        // ---------------------------------------------------
                        // TODO: ESCRIBE TU CÓDIGO AQUÍ
                        // ---------------------------------------------------
                        
                        // Tu lógica aquí...

                        $pos = stripos($frase,$prohibida);

                        if($pos !== false){
                            $frasePro = str_ireplace($prohibida,"********",$frase);   
                            $resultado = "Frase censurada: $frasePro<br> Indice encontrado:$pos";
                        }else{
                            $resultado =  "Frase original:$frase";
                        }
                        // ---------------------------------------------------
                        // SALIDA: Usa echo para imprimir la frase final y la alerta si corresponde
                        echo "Resultado:$resultado ";
                        ?>
                    </div>
                </div>
            </div>

            <div class="ticket priority-low">
                <div class="ticket-header">
                    <span>Ticket #005: Extracto Inteligente</span>
                    <span class="badge bg-blue">Baja Prioridad</span>
                </div>
                <div class="ticket-body">
                    <div class="instructions">
                        <strong>Requerimiento:</strong>
                        1. Si el texto > 50 chars, córtalo.
                        2. El corte debe ser en el último espacio disponible antes de los 50 chars (no cortar palabras a
                        la mitad).
                        3. Añade "..." al final y asegura mayúscula inicial.
                    </div>

                    <?php
                    // --- DATOS DE ENTRADA ---
                    $textoLargo = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
                    ?>

                    <div class="console">
                        <span class="label">Texto original (<?php echo strlen($textoLargo); ?> chars):</span>
                        <p style="font-size:0.8em; margin:5px 0 15px 0; opacity:0.7;"><?php echo $textoLargo; ?></p>
                        <hr>

                        <?php
                        // ---------------------------------------------------
                        // TODO: ESCRIBE TU CÓDIGO AQUÍ
                        // ---------------------------------------------------

                        if(strlen($textoLargo) > 50){
                            $corte = substr($textoLargo,0,50);
                            
                            $ultimoEspacio = strrpos($corte, " ");
                            if($ultimoEspacio !== false) {
                                $corte = substr($textoLargo,0,$ultimoEspacio);
                            }

                            $resultado = ucfirst(trim($corte)) . "...";
                        }else{
                            $resultado = ucfirst(trim($textoLargo));
                        }
                        
                        $extracto = $resultado; // Sustituir
                        

                        // ---------------------------------------------------
                        echo "Extracto generado: <strong>$extracto</strong>";
                        ?>
                    </div>
                </div>
            </div>

        </div>

</body>

</html>