<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<!------------------------------------------------------------------------------------>
<body>

<?php

    /*$numero = 3;

   #>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> IF

    if($numero > 0){
        echo "<p> 1El numero es positivo</p>"; #Sepuede hacer de esta manera
    }
    #------------------------------------------

    if($numero > 0) echo "<p> 1El numero es positivo</p>"; #Se puede hacer en una sola linea si llaves

    #------------------------------------------

    if($numero > 0): #Se puede hacer en varias lineas con un endif cerrando con dos puntos
        echo "<p>1El numero es positivo</p>";
    endif;

    #>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> IF ELSE

    if($numero > 0){
        echo "<p> 2El numero es positivo</p>";
    } else {
        echo ("<p> 3El numero no es positivo</p>");
    }
    #------------------------------------------

    if($numero > 0) echo "<p> 2El numero es positivo</p>";
    else echo ("<p> 3El numero no es positivo</p>");

    #------------------------------------------

    if($numero > 0):
        echo "<p> 2El numero es positivo</p>";
    endif;

    #>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> IF ELSEIF ELSE

    if($numero > 0){
        echo "<p> 2El numero es positivo</p>";

    } elseif($numero == 0){
        echo "<p> El numero es 0</p>";

    }else {
        echo ("<p> 3El numero no es positivo</p>");
    }
    #------------------------------------------

    if($numero > 0) echo "<p> 2El numero es positivo</p>";

    elseif($numero == 0)echo "<p> El numero es 0</p>";

    else echo ("<p> 3El numero no es positivo</p>");

    #------------------------------------------

    if($numero > 0):
        echo "<p> 2El numero es positivo</p>";
    endif;*/

    #>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

    $numero = 3;

    #Rangos: [-10,0),[0,10],(10,20)] --> Rangos en los que nos movemos

    if($numero >= -10 && $numero <0):
        echo "El numerito $numero está en el rango [-10,0)";

    elseif($numero >= 0 && $numero <= 10):
        echo "El numerito $numero está en el rango [0,10]";

    elseif($numero > 10 && $numero <= 20 ):
        echo "El numerito $numero está en el rango [10,20]";

    else:
        echo "El numerito $numero no esta en el rango";

    endif; #Cierro y termino

    #>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

    /*EJERCICIO -->
    ESCIBE UN IF QUE DECIDA CUAL DE LOS NUMEROS ES MAYOR, O SI SON IGUALES

    HACERLO DE DOS FORMAS DIFERENTES*/

    $numero1 = 3;
    $numero2 = 4;

    if($numero2 > $numero1):
        echo "El numero mayor es $numero2";
    elseif($numero1 == $numero2):
        echo "Los numeros $numero1 y $numero2 son iguales";
    else:
        echo "El numero $numero1 es mayor que el numero $numero2";
    endif;

    #---------------OTRA MANERA--------------------

    if($numero1 < $numero2){
        echo "El numero menor es $numero1";
    }
    elseif($numero2 > $numero1){
        echo "El numero mayor es $numero2";
    }
    else{
        echo "Los dos numeros son igualitos";
    }

    #>>>>>>>>>>>>>CORRECCION ALEJANDRA>>>>>>>>>>>>>>>>

    if($numero2 > $numero1):
        echo "El numero mayor es $numero2";
    elseif($numero1 == $numero2):
        echo "Los numeros $numero1 y $numero2 son iguales";
    else:
        echo "El numero $numero1 es mayor que el numero $numero2";
    endif;

    #---------------OTRA MANERA--------------------

    if($numero1 < $numero2){
        echo "<p>El numero menor es $numero1</p>";
    }
    elseif($numero2 > $numero1){
        echo "<p>El numero mayor es $numero2</p>";
    }
    else{
        echo "<p>Los dos numeros son igualitos</p>";
    }
?>
    
</body>
</html>