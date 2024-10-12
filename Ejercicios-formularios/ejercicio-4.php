<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<?php
//codigo para detectar errores
    error_reporting( E_ALL );
    ini_set( "display_errors", 1 );
    ?>

<body>
<!--Realiza un formulario que funcione a modo de conversor de temperaturas. Se introducirá en un campo de texto la temperatura, y luego tendremos un select para elegir las unidades de dicha temperatura, y otro select para elegir las unidades a las que queremos convertir la temperatura.

Por ejemplo, podemos introducir "10", y seleccionar "CELSIUS", y luego "FAHRENHEIT". Se convertirán los 10 CELSIUS a su equivalente en FAHRENHEIT.

En los select se podrá elegir entre: CELSIUS, KELVIN y FAHRENHEIT.-->


<!--Creo el formulario--->

<form action="" method="post">

<label for="temperatura">temperatura</label>
<input type="number" name="temperatura" placeholder="Introduce temperatura"><br><br>

<label for="tipos_temperatura">Convertir de: </label>

<select name="tipos_temperatura">

    <option value="CELSIUS">Celsius</option>
    <option value="KELVIN">kelvin</option>
    <option value="FAHRENHEIT">fahrenheit</option>

</select><br><br>

<label for="convertir">Convertir a: </label>

<select name="convertir">

    <option value="CELSIUS">Celsius</option>
    <option value="KELVIN">kelvin</option>
    <option value="FAHRENHEIT">fahrenheit</option>

</select><br><br>

<!--Boton-->
<input type="submit" value="Convertir temperatura">

</form>
<!--Realizo el ejercicio-->

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $_temperatura = $_POST["temperatura"];//guardo los valores
        $_desde = $_POST["tipos_temperatura"];
        $_hasta = $_POST["convertir"];

        $_conversion = "de " . strtolower($_desde) . " a " . strtolower($_hasta) . ":"; //concateno los valores en minuscula

        echo "<p>Temperatura: $_temperatura</p>";
        echo "<p>Convertir de: $_desde</p>";
        echo "<p>Convertir a: $_hasta</p>";

        //Para que el resultado salga correcto y no pase al default la cadena tiene que estar PERFECTISISISISMA :)

        $resultado = match ($_conversion) {
            "de celsius a kelvin:" => $_temperatura + 273.15,
            "de celsius a fahrenheit:" => ($_temperatura * 9/5) + 32,
            "de kelvin a celsius:" => ($_temperatura - 273.15),
            "de kelvin a fahrenheit:" => (($_temperatura - 273.15) * (9/5) + 32),
            "de fahrenheit a celsius:" => (($_temperatura - 32) * (5/9)),
            "de fahrenheit a kelvin:" => (($_temperatura - 32) * (5/9) + 273.15),
            "de celsius a celsius:" => $_temperatura,
            "de kelvin a kelvin:" => $_temperatura,
            "de fahrenheit a fahrenheit:" => $_temperatura,
            default => "ERROR A LA HORA DE CONVERTIR!!"
        };
        echo "<h2>Resultado: $resultado</h2>"; 
    }
    
?>


    
</body>
</html>