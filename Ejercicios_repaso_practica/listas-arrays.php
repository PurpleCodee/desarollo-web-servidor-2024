<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href = "Styles.css" rel = "stylesheet">
    <title>Listas-Arrays</title>
    <?php
//codigo para detectar errores
    error_reporting( E_ALL );
    ini_set( "display_errors", 1 );
    ?>
</head>
<body>
    <?php

        echo "<h3>Comparar Arrays</h3>";

        $amigos = array("Estela","Luis","Emilio","Juanjo");
        $amigos2 = array("Mateo","Angel","Sofi","Joaquin");

        //comparo
        if($amigos == $amigos2){
            echo "<p>Los arrays son iguales</p>";

        }else{
            echo "<p>Los arrays son diferentes</p>";
        }
    ?>

    <?php

        echo "<h3>Recorrer array con for y mostrarlo</h3>";

        $videojuegos = array(
            "Alice madnees return",
            "Elden ring",
            "Mario bros",
            "Dragon ball"
        );

        //recorro con un for
        echo "<ol>";
        
        for($i = 0; $i < count($videojuegos); $i++){
            echo "<li>$videojuegos[$i]</li>";
        }
        echo "</ol>";
    ?>

    

    <?php

    echo "<h3>Recorrer array con for each con clave y mostrarlo</h3>";

    $videojuegos = array(
        "Alice madnees return",
        "Elden ring",
        "Mario bros",
        "Dragon ball"
    );

    //recorro con un for
    echo "<ol>";

    foreach($videojuegos as $clave => $videojuego){

        echo "<li>$clave,$videojuego</li>";
    }
    echo "</ol>";
    ?>

    <?php
    echo "<h3>Recorrer array con for each y mostrarlo</h3>";

    $videojuegos = array(
        "123 "=> "Alice madnees return",
        "223 "=> "Elden ring",
        "323 "=> "Mario bros",
        "423 "=> "Dragon ball"
    );

    //recorro con un for
    echo "<ol>";

    foreach($videojuegos as $videojuego){

        echo "<li>$videojuego</li>";
    }
    echo "</ol>";
    ?>

    <?php
    echo "<h3>Metodos para ordenar</h3>";
    ?>

    <table>
        <thead>
            <tr>
                <th>Clave videojuego</th>
                <th>Nombre Videojuego</th>
            </tr>
        </thead>
    
    <tbody>
        <?php
            //sort de menor a mayor
            sort($videojuegos);
            //----------------
            foreach($videojuegos as $clave => $videojuego){
                echo "<tr>";
                echo"<td>$clave</td>";
                echo"<td>$videojuego</td>";
                echo "</tr>";    
            }
        ?>
    </tbody>
    </table>

    <?php
            //crear un array

            $peliculas = [
            ["harry potter", "aventura"], 
            ["la brujula dorada", "misterio"],
            ["scary movie", "comedia"],
            ["scary movie 2", "comedia"]
            ];

            //añadir a una matriz
            array_push($peliculas, ["la moneda", "misterio"]);

            //el unset sirve para borrar filas de un array o de una matriz
            unset($peliculas[4]);

            //print_r($peliculas);
            //recorro las peliculas ny creo la columna y les pongo un año

            for($i = 0; $i < count($peliculas) ; $i++){
                $peliculas[$i][2] = rand(1999, 2026);//añado columna de año
            }

            for($i = 0; $i < count ($peliculas); $i++){
                $peliculas[$i][3] = rand(1, 99);//episodios
            }

            for($i = 0; $i < count ($peliculas); $i++){
                if($peliculas[$i][2] <= 2023){
                    $peliculas[$i][4] = "Disponible";

                }else{
                    $peliculas[$i][4] = "proximamente";
                }
            }

            $_titulo = array_column($peliculas, 0);//me devuelve la columna del titulo
            $_genero = array_column($peliculas, 1);
            $_estreno = array_column($peliculas, 2);
            array_multisort($_genero, SORT_ASC,//lo ordeno de mandera ascendente y si fuese descendente seria DESC 
            $_estreno,SORT_ASC,
            $_titulo,SORT_ASC,

            $peliculas);//paso el array

            /**
             * asort() -> menor a mayor
             * arsort() -> mayor a menor
             * krsort() -> mayor a menor por la key
             * ksort() -> menor a mayor por key
             * sort() -> menor a mayor sin clave
             */
    ?>

    <table border="1">
        <caption>Peliculas</caption>
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Genero</th>
                <th>Año</th>
                <th>Episodios</th>
                <th>Disponibilidad</th>
            </tr>
        </thead>
            <tbody>
            <?php
            foreach($peliculas as $pelicula){
                list($titulo, $genero, $estreno, $episodio, $disponibilidad) = $pelicula;
                echo"<tr>";
                echo "<td>$titulo</td>";
                echo "<td>$genero</td>";
                echo "<td>$estreno</td>";
                echo "<td>$episodio</td>";
                echo "<td>$disponibilidad</td>";
                echo"</tr>";
            }
            ?>
            </tbody>
    </table>
</body>
</html>