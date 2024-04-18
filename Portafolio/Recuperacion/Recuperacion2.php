<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylee.css">
    <title>Verificador de Color</title>
    <style>
        .color-box {
            width: 100px;
            height: 100px;
            margin-top: 10px;
            border: 2px solid black;
        }
    </style>
</head>
<body>
<h1> RECUPERACIONES </h1>
    <nav>
        <ul>
            <li><a href="Recuperacion.php">Ejercicio #1</a></li>
            <li><a href="Recuperacion2.php">Ejercicio #2</a></li>
            <li><a href="Recuperacion3.php">Ejercicio #3</a></li>
        </ul>
    </nav>
    <h2>Verificador de Color</h2>
    <p>Ingresa un color. El programa se detendrá cuando ingreses el color ROJO en español.</p>
    <p>Recuerda que si quieres ver los colores mejor ponerlos en ingles para poder mostrarte el color que escojas</p>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <label for="color">Color:</label>
        <input type="text" name="color" id="color" required>
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $color = $_POST["color"];
        $color = strtolower($color);

        if ($color === "rojo") {
            echo "<p>¡Finalizado! Has ingresado el color rojo.</p>";
        } else {
            echo "<p>Has ingresado el color: $color</p>";
            // Mostrar un recuadro con el color ingresado
            echo "<div class='color-box' style='background-color: $color;'></div>";
        }
    }
    ?>

</body>
</html>

