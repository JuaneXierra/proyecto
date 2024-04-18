<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 3</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.html ">Volver a Inicio</a></li>
        </ul>
    </nav>
    <div class="content">
        <h1>Problema 3: Tabla de Multiplicar</h1>
        <?php
        $numero = $_POST['numero'] ?? '';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($numero == "") {
                echo "<p>Por favor, ingrese un número.</p>";
            } else {
                echo "<h2>Tabla de Multiplicar del $numero</h2>";
                echo "<ul>";
                for ($i = 1; $i <= 10; $i++) {
                    echo "<li>$numero x $i = " . ($numero * $i) . "</li>";
                }
                echo "</ul>";
            }
        }
        ?>
        <form method="post">
            <label for="numero">Ingrese un número:</label>
            <input type="number" id="numero" name="numero" required>
            <button type="submit" name="submit">Mostrar Tabla</button>
        </form>
    </div>
</body>
</html>
