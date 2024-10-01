<h3>Ejercicio 1</h3>
<?php
/*EJERCICIO 1 
*
*Calcula la suma de todos los numeros pares del 0 al 20
*
*/

/*MI FORMA*/
$i = 0;
$sum;
    echo "<ul>";
        while($i <= 20){
            if($i %2==0){
                $sum+=$i;
            }
                $i++;
        }
        echo "La suma de los numeros pares es $sum";
    echo "</ul>";

/*FORMA DE ALEJANDRA*/
/*El 0 se evalua falso*/
$suma = 0;

for($i = 0; $i <= 20; $i++){
    if($i % 2 == 0){
        $suma = $suma + $i;
    }
}

echo "<h3>La suma de los pares del 0 al 20 es: $suma </h3>";
echo "<h3>-----------------------------------------------------</h3>";


/*EJERCICIO 2
*
*(Hay que investigar un poco)
*
*Muestra por pantalla la fecha actual con el siguiente formato:
*"Miercoles 25 de septiembre de 2024"
*/
?>
<h3>Ejercicio 2</h3>

<?php

    //LO HACEMOS CON EL MATCH

    $dia = date("l");//l para el dia de la semana en español

    $dia_espanol = match($dia) {
        "Monday" => $dia_espanol = "Lunes",
        "Tuesday" => $dia_espanol = "Martes",
        "Wednesday" => $dia_espanol = "Miercoles",
        "Thursday" => $dia_espanol = "Jueves",
        "Friday" => $dia_espanol = "Viernes",
        "Saturday" => $dia_espanol = "Sabado",
        "Sunday" => $dia_espanol = "Domingo"
    };
    echo "<h3>$dia_espanol</h3>";
    echo "<h3>-----------------------------------------------------</h3>";

    $mes = date("F");//F para dia del mes en español

    $mes = match ($mes) {
        "January" => "Enero",
        "February" => "Febrero",
        "March" =>  "Marzo",
        "April" =>  "Abril",
        "May" => "Mayo",
        "June" => "Junio",
        "July" => "Julio",
        "August" => "Agosto",
        "September" => "Septiembre",
        "October" => "Octubre",
        "November" => "Noviembre",
        "December" => "Diciembre"
    };
    
    echo "<h3>$mes</h3>";
    echo "<h3>-----------------------------------------------------</h3>";

    $dia_n = date("j");
    $anno = date("Y");
    echo "<h3>$dia $dia_n de $mes de $anno</h3>";
    echo "<h3>-----------------------------------------------------</h3>";
?>

<?php
/*Ejercicio 3 -> HACER UN BUCLE QUE COMPRUEBE SI UN NUMERO ES PRIMO*/
//BUCLE DESDE 2 HASTA N-1, SI ALGUN RESTO = 0, NO ES PRIMO

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
echo "<h3>-----------------------------------------------------</h3>";
?>

<?php
/*LO MISMO QUE EL EJERCICIO 3 PERO CON 50 NUMEROS*/

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
echo "<h3>-----------------------------------------------------</h3>";
?>

<?php
/*CALCULA EL FIBBONACHI DE LOS 10 PRIMEROS NUMEROS PRIMOS*/
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


