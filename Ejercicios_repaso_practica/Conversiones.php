<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversiones</title>
</head>
<body>

<?php
//codigo para detectar errores
    error_reporting( E_ALL );
    ini_set( "display_errors", 1 );
    ?>

<!--Creo mi formulario-->
<form action=""  method="post">

    <label for="dinero">Dinero a convertir</label>
    <input type="number" name="dinero" placeholder="dinero"><br><br>

    <label for="tipos_moneda">Convertir de: </label>

    <select name="tipos_moneda">
        <option value="euros">EUROS</option>
        <option value="dolares">DOLARES</option>
        <option value="yenes">YENES</option>
    </select><br><br>

<!------------------------------------------------------------------------->
    <label for="convertir">Convertir a: </label>

    <select name="convertir">
        <option value="euros">EUROS</option>
        <option value="dolares">DOLARES</option>
        <option value="yenes">YENES</option>
    </select><br><br>

    <!--boton--->
    <input type="submit" value="Convertir moneda"><br><br>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $_dinero = $_POST["dinero"];//guardo los valores
        $_desde = $_POST["tipos_moneda"];
        $_hasta = $_POST["convertir"];

        $_conversion = "de " . strtolower($_desde) . " a " . strtolower($_hasta) . ":"; //concateno los valores en minuscula

        echo "<p>Dinero: $_dinero</p>";
        echo "<p>Convertir de: $_desde</p>";
        echo "<p>Convertir a: $_hasta</p>";

        //Para que el resultado salga correcto y no pase al default la cadena tiene que estar PERFECTISISISISMA :)

        $resultado = match ($_conversion) {
            "de euros a dolares:" => ($_dinero * 1.09),
            "de euros a yenes:" => ($_dinero * 162.6),
            "de dolares a euros:" => ($_dinero / 1.09),
            "de dolares a yenes:" => ($_dinero * 149.5),
            "de yenes a euros:" => ($_dinero / 162.6),
            "de yenes a dolares:" => ($_dinero / 149.5),
            default => "ERROR A LA HORA DE CONVERTIR!!"
        };
        echo "<h2>Resultado: $resultado</h2>"; 
    }
    
?>   
</form>    
</body>
</html>