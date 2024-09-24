<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases de la semana</title>
</head>
<body>
    <?php
        $dia = date("l");
        echo "<h1>Hoy es $dia</h1>"
    ?>

    <?php
        /*HACER UN SWITCH QUE MUESTRE POR PANTALLA SI HOY HAY CLASES DE WEB SERVIDO m,m,v*/

        $dia = date("l");


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
    ?>
    
</body>
</html>