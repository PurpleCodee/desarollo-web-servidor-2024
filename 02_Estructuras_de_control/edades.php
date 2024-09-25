<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edades</title>
</head>
<body>
    <?php

    /*CON IF Y CON MATCH
    -Si la persona tiene entre 0 y 4 años, es un BEBÉ
    -Si la persona tiene entre 5 y 17 años, es MENOR DE EDAD
    -Si la persona tiene entre 18 y 65 años, es ADULTO
    -Si la persona tiene entre 66 y 120 años, es JUBILADO
    -Si la edad esta fuera de rango, es ERROR*/

    /*$edad_rang(-10,140);

    if ($edad_rang < 0 && $edad_rang <=4) {
        echo "<p>La edad del bebe es $edad_rang</p>";
    }
    elseif ($edad_rang > 5 && $edad_rang <=17) {
        echo "<p>La edad del menor es $edad_rang</p>";
    }
    elseif ($edad_rang > 18 && $edad_rang <=65) {
        echo "<p>La edad del adulto es $edad_rang</p>";
    }
    elseif ($edad_rang > 66 && $edad_rang <=120) {
        echo "<p>La edad del jubilado es $edad_rang</p>";
    }
    else{
        echo "<p>ERROR!!!!</p>";
    }*/

    //EMPLO CON MATCH
    echo $resultado;

    $edad_rang = rand(-10,140);

    $resultado = match (true) {
        $edad_rang >= 0 && $edad_rang <=4  => "La edad del bebe es $edad_rang",
        $edad_rang >= 5 && $edad_rang <=17 => "La edad del menor es $edad_rang",
        $edad_rang >= 18 && $edad_rang <=65 => "La edad del adulto es $edad_rang",
        $edad_rang >= 66 && $edad_rang <=120 => "La edad del jubilado es $edad_rang",
        default => "EDAD: $edad_rang ERROR!! => "

    };
    echo $resultado;
    
    ?>
    
</body>
</html>