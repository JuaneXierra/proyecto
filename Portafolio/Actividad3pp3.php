<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Productos en un Supermercado</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 50%;
            margin: 20px auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        form {
            margin-bottom: 20px;
        }
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 6px;
            margin-top: 6px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Gestión de Productos en un Supermercado</h2>
        <?php
        $inventario = [
            [
                "nombre" => "Arroz",
                "precio" => 2.5,
                "stock" => 100
            ],
            [
                "nombre" => "Leche",
                "precio" => 1.5,
                "stock" => 50
            ],
            [
                "nombre" => "Pan",
                "precio" => 1,
                "stock" => 80
            ],
            [
                "nombre" => "Manzanas",
                "precio" => 3,
                "stock" => 40
            ],
            [
                "nombre" => "Aceite",
                "precio" => 4,
                "stock" => 60
            ]
        ];
        function mostrarProductos($inventario) {
            echo "<table>";
            echo "<tr><th>Nombre</th><th>Precio</th><th>Stock</th></tr>";
            foreach ($inventario as $producto) {
                echo "<tr>";
                echo "<td>{$producto['nombre']}</td>";
                echo "<td>{$producto['precio']}</td>";
                echo "<td>{$producto['stock']}</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
        function agregarProducto(&$inventario, $nombre, $precio, $stock) {
            $producto = [
                "nombre" => $nombre,
                "precio" => $precio,
                "stock" => $stock
            ];
            array_push($inventario, $producto);
        }

        function actualizarPrecio(&$inventario, $nombre, $nuevoPrecio) {
            foreach ($inventario as &$producto) {
                if ($producto['nombre'] === $nombre) {
                    $producto['precio'] = $nuevoPrecio;
                }
            }
        }

        function verificarStock($inventario, $nombre) {
            foreach ($inventario as $producto) {
                if ($producto['nombre'] === $nombre) {
                    return $producto['stock'];
                }
            }
            return "No se encontró el producto en el inventario.";
        }
        echo "<h3>Lista de Productos</h3>";
        mostrarProductos($inventario);

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (isset($_POST["agregar"])) {
                $nombre = $_POST["nombre"];
                $precio = floatval($_POST["precio"]);
                $stock = intval($_POST["stock"]);
                agregarProducto($inventario, $nombre, $precio, $stock);
                echo "<p>¡Producto agregado correctamente!</p>";
            } elseif (isset($_POST["actualizar"])) {
                $nombre = $_POST["nombre"];
                $nuevoPrecio = floatval($_POST["nuevoPrecio"]);
                actualizarPrecio($inventario, $nombre, $nuevoPrecio);
                echo "<p>¡Precio actualizado correctamente!</p>";
            } elseif (isset($_POST["verificar"])) {
                $nombre = $_POST["nombre"];
                $stock = verificarStock($inventario, $nombre);
                echo "<p>Stock disponible de $nombre: $stock unidades</p>";
            }
            echo "<h3>Lista de Productos Actualizada</h3>";
            mostrarProductos($inventario);
        }
        ?>
        <h3>Agregar Nuevo Producto</h3>
        <form method="post">
            <label for="nombre">Nombre del Producto:</label>
            <input type="text" id="nombre" name="nombre" required>
            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" min="0.01" step="0.01" required>
            <label for="stock">Stock:</label>
            <input type="number" id="stock" name="stock" min="1" required>
            <input type="submit" name="agregar" value="Agregar Producto">
        </form>
        <h3>Actualizar Precio de Producto Existente</h3>
        <form method="post">
            <label for="nombre">Nombre del Producto:</label>
            <input type="text" id="nombre" name="nombre" required>
            <label for="nuevoPrecio">Nuevo Precio:</label>
            <input type="number" id="nuevoPrecio" name="nuevoPrecio" min="0.01" step="0.01" required>
            <input type="submit" name="actualizar" value="Actualizar Precio">
        </form>
        <h3>Verificar Stock de Producto</h3>
        <form method="post">
            <label for="nombre">Nombre del Producto:</label>
            <input type="text" id="nombre" name="nombre" required>
            <input type="submit" name="verificar" value="Verificar Stock">
        </form>
    </div>
</body>
</html>
