
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
 </head>
 <body>
 <?php
    error_reporting( E_ALL );
    ini_set( "display_errors", 1 );
    ?>
    <!-- Realiza un formulario que reciba 3 números y devuelva el mayor de ellos.v-->
    <!--creo el formulario-->
    <!--action vacio para que la pagina recarge--->
    <form action="" method="post">

    <input type="number" name="numero1" placeholder="Introduce numero 1"><br><br>
    <input type="number" name="numero2" placeholder="Introduce numero 2"><br><br>
    <input type="number" name="numero3" placeholder="Introduce numero 3">

<!--Boton -->
    <input type="submit" value="Comparar numeros"><br>


    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $numero1 = $_POST["numero1"];//guardo el valor 
            $numero2 = $_POST["numero2"];
            $numero3 = $_POST["numero3"];

            $mayor = $numero1;

            if($numero2 > $mayor){
                $mayor = $numero2;
            }
            if($numero3 > $mayor){
                $mayor = $numero3;

            }

            echo "<p> El numero mayor es $mayor</p>";
        }
    ?>

    </form>
 </body>
 </html>