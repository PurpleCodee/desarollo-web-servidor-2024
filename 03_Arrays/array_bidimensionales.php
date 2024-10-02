<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays bidimensionales</title>
</head>
<body>
    <?php
    $videojuegos = [
        ["FIFA 24", "Deporte", 70],
        ["Dark souls", "Soulslike", 50],
        ["Hollow Knight", "Plataformas", 30],
    ];

    foreach($videojuegos as $videojuego) {
        list($titulo, $categoria, $precio)= $videojuego;
        echo "<p>$titulo,$categoria,$precio</p>";
    }
    ?>
</body>
</html>