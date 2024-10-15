<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IRPF</title>
</head>
<body>

<form action="" method="post">

    <label for="bruto">Introduce tu salario bruto</label>
    <input type="number" name="bruto" placeholder="Introduce tu salario bruto"><br><br>

    <!--Boton-->
    <input type="submit" value="Calcular el IVA"><br><br>

    <label for="resultado">resultado</label>



</form>
<!--Realizo el ejercicio-->

<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        //valiables para guardar el valor

        $_bruto = $_POST["bruto"];
        $_convertir = $_POST["convertir"];

        //variable donde guardo el resultado
        $_resultado = $_POST["resultado"];

        //hago las comparaciones
        if( $_bruto > 0 and $_bruto <= 12450){//19.0% 

            $_resultado = $_bruto - ($_bruto * 0.19);

            echo("<p>$_resultado</p>");
            
        }else if($_bruto >= 12450 and $_bruto <= 20199){//24.0%
            $_resultado = $_bruto - ($_bruto * 0.19);
            $_resultado = $_bruto - ($_bruto * 0.24);

            echo("<p>$_resultado</p>");

        }else if($_bruto >= 20200 and $_bruto <= 35199){//30.0%
            $_resultado = $_bruto - ($_bruto * 0.19);
            $_resultado = $_bruto - ($_bruto * 0.24);
            $_resultado = $_bruto - ($_bruto * 0.30);

            echo("<p>$_resultado</p>");

        }else if($_bruto >= 35200 and $_bruto <= 59999){//37.0%
            $_resultado = $_bruto - ($_bruto * 0.19);
            $_resultado = $_bruto - ($_bruto * 0.24);
            $_resultado = $_bruto - ($_bruto * 0.30);
            $_resultado = $_bruto - ($_bruto * 0.37);

            echo("<p>$_resultado</p>");

        }else if($_bruto >= 60000 and $_bruto <= 299999){//45.0%
            $_resultado = $_bruto - ($_bruto * 0.19);
            $_resultado = $_bruto - ($_bruto * 0.24);
            $_resultado = $_bruto - ($_bruto * 0.30);
            $_resultado = $_bruto - ($_bruto * 0.37);
            $_resultado = $_bruto - ($_bruto * 0.45);

            echo("<p>$_resultado</p>");

        }else if($_bruto > 300000){//47.0%
            $_resultado = $_bruto - ($_bruto * 0.19);
            $_resultado = $_bruto - ($_bruto * 0.24);
            $_resultado = $_bruto - ($_bruto * 0.30);
            $_resultado = $_bruto - ($_bruto * 0.37);
            $_resultado = $_bruto - ($_bruto * 0.45);
            $_resultado = $_bruto - ($_bruto * 0.47);

            echo("<p>$_resultado</p>");

        }  
    }
?>
    
</body>
</html>