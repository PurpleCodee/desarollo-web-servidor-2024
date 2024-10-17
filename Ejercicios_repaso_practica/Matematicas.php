<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
/*Ejercicio 3 -> HACER UN BUCLE QUE COMPRUEBE SI UN NUMERO ES PRIMO*/
//BUCLE DESDE 2 HASTA N-1, SI ALGUN RESTO = 0, NO ES PRIMO
echo "<h3>------------Comprobar si el numero es primo---------</h3>";

$num = 9;
$primo = true;
for($i = 2; $i < $num; $i++){
    if($num % $i == 0){
        $primo = false;
        break;
    }
}
if($primo){
    echo "<h3>El número $num es primo</h3>";
}
else{
    echo "<h3>El número $num no es primo</h3>";
}
?>

<?php
/*LO MISMO QUE EL EJERCICIO 3 PERO CON 50 NUMEROS*/
echo "<h3>------------Comprobar si el numero es primo pero con 50 numeros---------</h3>";
$num = 2;
$contPrimos = 0;

echo"<ol>";
while($contPrimos < 50){
    $esPrimo = true;
    for($i = 2; $i < $num; $i++){
        if($num % $i == 0){
            $esPrimo = false;
            break;
        }
    }
    if($esPrimo){
        $contPrimos++;
        echo "<li>$num</li>";
    }
    $num++;
}

echo "</ol>";
?>

<?php
/*CALCULA EL FIBBONACHI DE LOS 10 PRIMEROS NUMEROS PRIMOS*/
echo "<h3>------------Calcula el fibbonachi de los 10 primeros primos---------</h3>";
$aux1 = 0;
$aux2 = 1;
$fib = null;
$n = 4;

$n = 4;
for($i = 0; $i <= $n; $i++){
    $fib = $aux1 + $aux2;
    $aux1 = $aux2;
    $aux2 = $fib;
}
echo "<h4>El fibonacci de $n es $fib</h4>"
?>

<?php
echo "<h3>------------Numeros randon del 1 al 3---------</h3>";
        $n = rand(1,3); /*Guardo en una variable un numero aleatorio del 1 al 3*/

        /*Creo mi estructura de contros switch*/

        switch($n) {
            case 1:
                echo "<p>El numero aleatorio es $n</p>";
                break; /*Con el break acabo el switch*/
            
            case 2:
                echo "<p>El numero aleatorio es $n</p>";
                break;

            default;
                echo "<p>El numero alestorio es $n</p>";
        }
    ?>
    

    <?php
         /*COMPROBAR CON UN SWITCH SI UN NUMERO DEL 1 AL 10 ES PAR O IMPAR*/
echo "<h3>------------Numeros randon del 1 al 3 y si es par o impar---------</h3>";
         $n = rand(1,10);
         $resto = $n % 2;

         switch($resto) {
            case 0:
                echo "<p>El numero $n es par</p>";
                break;

            case 1;
                 echo "<p>El numero $n es impar</p>";
         }
    ?>

    <?php

echo "<h3>------------Calcular factorial--- el sumatorio es igual pero con suma------</h3>";
        $num = 5;
        $factorial = 1;
        for($i = 1; $i <= $num; $i++){

            $factorial *= $i;
            
        }
        echo "<p>El factorial es $factorial</p>";
              
    ?>

    
</body>
</html>