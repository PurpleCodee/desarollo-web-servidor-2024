<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio-3</title>
</head>
<body>
<?php
//codigo para detectar errores
    error_reporting( E_ALL );
    ini_set( "display_errors", 1 );
    ?>

<!--Realiza un formulario que reciba dos números y devuelva todos los números primos dentro de ese rango (incluidos los extremos).-->
    
<!--Creo el formulario-->

<form action="" method="post">
    <input type="number" name="primerNum" placeholder="Introduce numero 1"><br><br>
    <input type="number" name="segundoNum" placeholder="Introduce numero 2"><br><br>

<!--Boton-->
<input type="submit" value="Mostrar numeros primos">

<!---Realizar ejercicio-3-->

<?php
    //Esta cabezera en el if lo tiene que tener siempre sirve para recoger los datos del formulario y trabajar con ellos

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $primerNum = $_POST["primerNum"];
        $segundoNum = $_POST["segundoNum"]; //guardo el valor de los numero del formulario y tarabajo con el valor

        if($primerNum > $segundoNum){
            //compruebo si el primer numero es menor que el primero o igual
            echo "El primer numero debe de ser menor o igual que el segundo";
        }else{
            //si el numero no es menor o igual entonces es primo
            echo "<ul>";

            //itero en el rango de numeros va desde el primer numero hasta que sea menor o igual que el segundo
            for($i= $primerNum; $i <= $segundoNum; $i++ ){
                $esPrimo = true; //utilizo un booleano doy por echo que es primo

                if($i <= 1){
                    // Un número primo es mayor que 1 y solo divisible por 1 y por sí mismo
                    $esPrimo = false;
                }else{
                   // Compruebo si el número es divisible por algún número entre 2 y sqrt($i) --> raiz cuadrada
                   
                   for($j = 2; $j <= sqrt($i); $j++){

                    if($i % $j == 0){
                        //si es divisible por culaquier numero no es primo
                        $esPrimo = false;
                   }
                }
            }
            //si es primo los imprimo
            if($esPrimo){
                echo "<li>El numero $i es primo</li>";

            }      
        } 
        echo "</ul>";
    }
}
?>
</form>
</body>
</html>