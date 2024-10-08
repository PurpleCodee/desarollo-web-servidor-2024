<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplos formularios</title>
</head>
<body>
    <?php
        /**
         * SINGLE PAGE FORM --> TODA LA INFORMACION SE PROCESA EN LA MISMA PAGINA
         * 
         * MULTI PAGE FFORM --> RENVIAR A OTRA PAGINA */ 
    ?>

    <!--Estructura de formularion en html-->

    <form action="" method="post">
        <input type="number" name="numero">
        <input type="text" name="mensaje">
        <input type="submit" value="Enviar">
        
    </form>

    <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            /**
             * El servidor ejecutara este bloque de codigo cuando reciba una peticion
             * a traves del metodo POST
             */
            $mensaje = $_POST["mensaje"];
            $numero = $_POST["numero"];

            $i = 0;
            while( $i < $numero){
                echo "<h1>$mensaje</h1>";
                $i++;   
            }
        }
            /**
             * Modificar formulario anterior para que se puedaintroducir
             * tambien un numero
             * 
             *  El mensaje se mostrara tantas vecesa como se indique el numero
             */
    ?>
    
</body>
</html>