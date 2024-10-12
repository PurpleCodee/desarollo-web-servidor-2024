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

<select type="text" name="tipos_temperatura">
    <option value="CELSIUS">CELSIUS</option>
    <option value="KELVIN">KELVIN</option>
    <option value="FAHRENHEIT">FAHRENHEIT</option>
</select>

<!--Boton-->
<input type="submit" value="Convertir temperatura">

<!--Realizo el ejercicio-->

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
       
    }
?>

</form>
    
</body>
</html>