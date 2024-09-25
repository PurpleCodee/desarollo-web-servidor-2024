<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listas/Bucles</title>
</head>
<body>
    <?php
    $i = 1;
    echo "<ul>";

    while($i < 10){
        echo "<li>$i</li>";
        $i++;
    }
    echo "</ul>";
    ?>

    <?php
    $i = 1;
    echo "<ul>";
    while($i < 10):
        echo "<li>$i</li>";
        $i++;
    endwhile;
    echo "</ul>";
    ?>
    <h3>Lista 3</h3>
    <?php
        /*EJERCICIO CON WHILE Y LAS ESTRUCTURAS DE CONTROL
        NECESARIAS, MUSTRA EN UNA LISTA SIN  ORDENAR TODOS LOS MULTIPLOS DE 3 ENTRE 1 Y 30*/

        $i = 1;

        echo "<ul>";
            while($i <= 30){
                if($i %3 == 0){
                    echo "<li>$i</li>";
                }
                $i++;
            }
        echo "</ul>";
    ?>
    <h3>Lista con do while</h3>

    <?php

    $i = 1;

    echo "<ul>";
    do {
        echo "<li>$i</li>";

        $i++;//hago el incremento de la i

    } while($i <= 10);
    echo "</ul>";
    ?>

<h3>Lista con for</h3>

<?php
echo "<ul>";
for($i = 1; $i <= 10; $i++) {
    echo "<li>$i</li>";
}
echo "</ul>"; 
?>

<h3>Lista con FOR 2</h3>

<?php
echo "<ul>";
for($i = 1; ;$i++) { //entre medias no pongo nada 
    if($i >= 10) break;
    echo "<li>$i</li>";
}
echo "</ul>"; 
?>


    
</body>
</html>