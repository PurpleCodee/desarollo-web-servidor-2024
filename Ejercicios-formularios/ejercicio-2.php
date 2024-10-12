<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
<?php
//codigo para detectar errores
    error_reporting( E_ALL );
    ini_set( "display_errors", 1 );
    ?>

<!--
Realiza un formulario que reciba 3 números: a, b y c.
Se mostrarán en una lista los múltiplos de c que se encuentren entre a y b.
Por ejemplo, si a = 3, b = 10, c = 2
Los múltiplos de 2 entre 3 y 10 son: 4, 6, 8 y 10

5,15,3
6,9,12,15
-->


<!--Creo el formulario-->
<form action="" method="post">

    <input type="number" name="a" placeholder="Introduce numero a"><br><br>
    <input type="number" name="b" placeholder="Introduce numero b"><br><br>
    <input type="number" name="c" placeholder="Introduce numero c"><br><br>

<!--Boton-->
<input type="submit" value="Comprobar multiplos">

<!--Realizo el ejercicio-->

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $a = $_POST["a"];//guardo el valor de a
        $b = $_POST["b"];
        $c = $_POST["c"];


        //Se mostrara en una lista los multiplos de  c - entre b y a
        //que seran - - - - - la lista
        $multiplos = array();

        for($i = $a; $i <= $b; $i++){
            if($i % $c == 0){
                echo "<li>$i</li>";
            }
           
        }
       
    }
?>

</form>
</body>
</html>