<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar</title>
</head>
<body>
    <!--
        Crea un formulario que reciba un número.
        Se mostrara en una tabla HTML la tabla de multiplicar de ese número.
        Ejemplo:

        3 x 1 = 3
        3 X 2 = 6
        3 x 3 = 9
        ...
        3 x 10 = 30
    -->
    
    <form action="" method="post">
        <label for="Recibe">RECIBE</label>
        <input type="number" name="numero" id="Recibe" placeholder="Introduce un numero">
        <input type="submit" value="Enviar">
    </form>

    <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $numero = $_POST["numero"];
            $resultado = 0;

            for($i = 1; $i < 11; $i++ ){
                $resultado = $numero * $i;
                echo "<p>$numero  x  $i  =  " . $resultado . " </p>";
            }
           
        }
    ?>

    
</body>
</html>