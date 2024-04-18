<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylee.css">
    <title>Tabla de Multiplicar</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
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
    <h2>Tabla de Multiplicar</h2>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <label for="numero">Ingrese un número:</label>
        <input type="number" name="numero" id="numero" required>
        <button type="submit">Generar Tabla</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];

        echo "<h3>Tabla de Multiplicar del $numero</h3>";
        echo "<table>";
        echo "<tr><th>Número</th><th>Resultado</th></tr>";

        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "<tr><td>$numero x $i</td><td>$resultado</td></tr>";
        }

        echo "</table>";
    }
    ?>

</body>
</html>


