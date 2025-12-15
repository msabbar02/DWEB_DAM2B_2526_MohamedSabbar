<?php
    // fichero con funciones de ayuda (helpers)
    function verArray($array)
    {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }

    function queCodigoPostalTiene($nombreDelBarrio){
        $barios = array(
            "ROCHAPEA"=> "31014",
            "SAN JUAN"=> "31011",
            "CHANTREA"=> "31015",
            "ITURRAMA"=> "31007",
            "BUZTINTXURI"=> "31012",
            "MENDILLORRI"=> "31016"
        );
        $barrio = strtoupper($nombreDelBarrio);
        $buscado = array_key_exists($barrio, $barios);
        if ($buscado) {
            return $barios[$barrio];
        } else {
            return "No existe.";
        }
    }

    function nombreCompletoDe($nombreDeMateria){
        $materias = array(
            "AWEB"=> "IMPLANTACIÓN DE APLICACIONS WEB",
            "SEAD"=> "SEGURIDID Y ALTA DISPONIBILIDAD",
            "SERI"=> "SERVICIOS DE RED INTERNET",
            "FOL"=> "FORMACION LABORAL ",
            "IMSO"=> "IMSO",
        );
        $materia = strtoupper($nombreDeMateria);
        $buscado = array_key_exists($materia, $materias);
        if ($buscado) {
            return $materias[$materia];
        } else {
            return "No existe.";
        }
    }


?>
