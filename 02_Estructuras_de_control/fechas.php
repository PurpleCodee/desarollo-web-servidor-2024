<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fechas</title>
</head>
<body>
    <h1>Manual de php</h1>
    <a href="https://www.php.net/manual/es/index.php">Manual PHP</a>

    <br>
    <?php #Es una funcion que se llama date da formato a la hora local
    echo date("l"); #--> Friday

    echo ("<br>");

    //$numero % 4
    $dia = date("j"); //llamo a la funcion

    if($dia %2==0){
        echo "El dia $dia es par";
    }
    ?>
    
</body>
</html>