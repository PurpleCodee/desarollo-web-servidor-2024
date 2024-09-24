<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros aleatorios</title>
</head>
<body>
    <h1>Numeros aleatorios</h1>
    <?php
        $n = rand(1,3); /*Guardo en una variable un numero aleatorio del 1 al 3*/

        /*Creo mi estructura de contros switch*/

        switch($n) {
            case 1:
                echo "<p>El numero aleatorio es $n</p>";
                break; /*Con el brak acabo el switch*/
            
            case 2:
                echo "<p>El numero aleatorio es $n</p>";
                break;

            default;
                echo "<p>El numero alestorio es $n</p>";

        }
    ?>

    <?php
         /*COMPROBAR CON UN SWITCH SI UN NUMERO DEL 1 AL 10 ES PAR O IMPAR*/

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
    
</body>
</html>