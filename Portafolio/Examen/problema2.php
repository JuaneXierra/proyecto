<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 2</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.html">Volver a Inicio</a></li>
        </ul>
    </nav>
    <div class="content">
        <h1>Problema 2: Descuento en la Tienda</h1>
        <?php
        $puntos = $_POST['puntos'] ?? '';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($puntos == "") {
                echo "<p>Por favor, ingrese la cantidad de puntos del cliente.</p>";
            } else {
                if ($puntos < 100) {
                    $descuento = 0.1;
                } elseif ($puntos >= 100 && $puntos < 150) {
                    $descuento = 0.12;
                } elseif ($puntos == 150) {
                    $descuento = 0.15;
                } else {
                    $descuento = 0.20;
                }

                $precioFinal = 5000; // Precio final de compra
                $precioDescuento = $precioFinal - ($precioFinal * $descuento);

                echo "<p>El cliente tiene $puntos puntos.</p>";
                echo "<p>El descuento aplicado es del " . ($descuento * 100) . "%.</p>";
                echo "<p>El precio final de compra es: $precioDescuento pesos.</p>";
            }
        }
        ?>
        <form method="post">
            <label for="puntos">Cantidad de puntos del cliente:</label>
            <input type="number" id="puntos" name="puntos" required>
            <button type="submit" name="submit">Calcular Descuento</button>
        </form>
    </div>
</body>
</html>
