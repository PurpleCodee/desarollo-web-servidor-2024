<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-------------------------------------------------------------------------------------->
    <?php
    #Primera prueba de php

        define("EDAD",25); #Esto es una constante lo que quiere decir que no cambia su estado

        $var  = 1; #Inicializar variable entera

        $var = 10.0; #Inicializar variable float si le pongo un punto le digo que es un float

        $var = "Hola mundito"; #Inicializa la variable String

        $var = 3; #Machaca el valor y cambia el tipo 

        //$var = true; #Es un booleano TODO es TRUE menos el 0 que es FALSE  (SE COMENTA PARA QUE NO INTERFIERA CON EL echo)

        //$var = false; #No es sensible a las mayusculas (pero un poquito de decencia se escibe bien) (SE COMENTA PARA QUE NO INTERFIERA CON EL echo)

        //echo $var; Para mostrar por pantalla

        var_dump($var); #Te devuelve la variable y el tipo

        echo "<br>"; #Puedo hace un salto de linea con html

        echo "<h2 style= 'color: purple'> La variable es $var </h2>"; #Muestro en el navegador

        $frase1 = "Holita";
        $frase2 = "mundito";

        echo "$frase1 " . "$frase2"; #Concateno con un punto entre medias

        echo "<p> $frase1 " . "$frase2 </p>";
    ?>
    
</body>
</html>