<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases de la semana</title>
</head>
<body>

    <?php
        /*HACER UN SWITCH QUE MUESTRE POR PANTALLA SI HOY HAY CLASES DE WEB SERVIDO m,m,v*/

        $dia = date("l");

/*
        switch ($dia) {

            case "Tuesday":
                    echo "<p>Hoy dia $dia hay clases de servidores</p>";
                break;

            case "Wednesday":
                echo "<p>Hoy dia $dia hay clases de servidores</p>";
                break;

            case "Friday":
                echo "<p>Hoy dia $dia hay clases de servidores</p>";
                break;
            
            default:
                echo "<p>Hoy no hay clases de servidores</p>";

        }
        #OTRA MANERA DE HACERLO

        /*switch ($dia) {

            case "Tuesday":
            case "Wednesday":
            case "Friday":

                echo "<p>Hoy dia $dia hay clases de servidores</p>";

                break;

            default:
                echo "<p>Hoy no hay clases de servidores</p>";
        }*/




    #1- CREAR UN SWITCH QUE SEGUN EL DIA EN EL QUE ESTEMOS, ALMACENE EN UNA VARIBLE EL DIA EN ESPAÑOL

    #2- RESCRIBIR EL SWITCH DE LA ASIGNATURA CON LOS DÎAS EN ESPAÑOL

    $dia = date("l");
    $dia_espanol = null;

    switch ($dia) {

        case "Monday":
            $dia_espanol = "Lunes";
            break;

        case "Tuesday":
            $dia_espanol = "Martes";
            break;

        case "Wednesday":
            $dia_espanol = "Miercoles";
            break;

        case "Thursday":
            $dia_espanol = "Jueves";
            break;

        case "Friday":
            $dia_espanol = "Viernes";
            break;

        case "Saturnday":
            $dia_espanol = "Sabado";
            break;

        case "Sunday":
            $dia_espanol = "Viernes";
            break;

    }

    //ESTRUCTURA MATCH --> ES UN SWITCH CON MAS COSAS DENTRO

    $res = match ($dia_espanol) {
        "Martes" => "<p>Hoy $dia_espanol si tenemos clase de web servidor</p>" ,
        "Miercoles" => "<p>Hoy $dia_espanol si tenemos clase de web servidor</p>" ,
        "Viernes" => "<p>Hoy $dia_espanol si tenemos clase de web servidor</p>",
        default => "<p>Hoy $dia_espanol no tenemos clase de web servidor</p>"
    }; #importante cerrar con punto y coma

    //muestro el mensaje con un echo
    echo $res;

    //EJERCICIO : HACER UN NUMERO MATCH CON UNUMERO DEL 1 AL 3 Y MOSTRAR SI ES PAR O IMPAR

    $num_random = rand(1,3);
    $resto = $num_random % 2;

    $res_random = match ($num_random) {
         1 => "<p El numero aleatorio es 1 /p>",
         2 => "<p El numero aleatorio es 2 /p>",
         3 => "<p El numero aleatorio es 3 /p>"
    };

    echo $res_random;

    $numero = rand(-10,20);
    $resultado = match (true) {

        $numero >= -10 && $numero < 0 => "El numero $numero esta en el rango [-10,0]",
        $numero >= 0 && $numero <= 10 => "El numero $numero esta en el rango [0,10]",
        $numero > 10 && $numero <= 20 => "El numero $numero esta en el rango [10,20]",
      
    };
    echo $resultado;


    ?>
 
</body>
</html>