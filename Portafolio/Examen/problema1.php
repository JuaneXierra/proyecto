<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 1</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.html">Volver a Inicio</a></li>
        </ul>
    </nav>
    <div class="content">
        <h1>Problema 1: Cálculo de Precio de Entrada</h1>
        <?php
        $edad = $_POST['edad'] ?? '';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($edad == "") {
                echo "<p>Por favor, ingrese la edad del cliente.</p>";
            } else {
                if ($edad < 4) {
                    $precio = 0;
                } elseif ($edad >= 4 && $edad <= 18) {
                    $precio = 5000;
                } else {
                    $precio = 10000;
                }

                echo "<p>El precio de entrada para un cliente de $edad años es: $precio pesos.</p>";
            }
        }
        ?>
        <form method="post">
            <label for="edad">Edad del cliente:</label>
            <input type="number" id="edad" name="edad" required>
            <button type="submit" name="submit">Calcular Precio</button>
        </form>
    </div>
</body>
</html>
