<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylee.css">
    <title>Juego de Adivinar Número</title>
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
    <h2>Juego de Adivinar Número</h2>
    <p>Intenta adivinar el número entre 1 y 100.</p>

    <?php
    session_start();
    if (!isset($_SESSION['numero_secreto'])) {
        $_SESSION['numero_secreto'] = rand(1, 100);
        $_SESSION['intentos'] = 0;
    }

    $numero_secreto = $_SESSION['numero_secreto'];
    $intentos = $_SESSION['intentos'];

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["numero"])) {
        $numero_usuario = $_POST["numero"];

        if (!is_numeric($numero_usuario)) {
            echo "<p>Por favor ingresa un número válido.</p>";
        } else {
            $intentos++;

            if ($numero_usuario < $numero_secreto) {
                echo "<p>El número es mayor que $numero_usuario.</p>";
            } elseif ($numero_usuario > $numero_secreto) {
                echo "<p>El número es menor que $numero_usuario.</p>";
            } else {
                echo "<p>Felicidades, ¡has adivinado el número en $intentos intentos!</p>";
                // Reiniciar el juego
                unset($_SESSION['numero_secreto']);
                unset($_SESSION['intentos']);
            }
        }
        $_SESSION['intentos'] = $intentos;
    }

    // Manejo del reinicio completo del juego
    if (isset($_POST["reiniciar"]) && $_POST["reiniciar"] === "true") {
        unset($_SESSION['numero_secreto']);
        unset($_SESSION['intentos']);
        // Redirigir a la misma página para evitar el reenvío del formulario
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }
    ?>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <label for="numero">Introduce un número:</label>
        <input type="number" name="numero" id="numero" min="1" max="100" required>
        <button type="submit">Comprobar</button>
        <button type="submit" name="reiniciar" value="true">Reiniciar Juego</button>
    </form>

</body>
</html>
