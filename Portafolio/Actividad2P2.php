<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio</title>
    <link rel="stylesheet" href="./estilos.css">
</head>
<body>
    <nav class="nav">
        <div class="nav__container">
            <h1 class="nav__title">Portafolio 11-2</h1>
            <a href="#menu" class="nav__menu">
                <img src="./assets/menu.svg" class="nav__icon">
            </a>
            <a href="#" class="nav__menu nav__menu--second">
                <img src="./assets/close.svg" class="nav__icon ">
            </a>
            <ul class="dropdown" id="menu">
                <li class="dropdown__list">
                    <a href="index.html" class="dropdown__link">
                        <img src="./assets/house.svg" class="dropdown__icon">
                        <span class="dropdown__span">Inicio</span>
                    </a>
                </li>
                <li class="dropdown__list">
                    <a href="#" class="dropdown__link">
                        <img src="./assets/projects.svg" class="dropdown__icon">
                        <span class="dropdown__span">Primer Periodo</span>
                        <img src="./assets/down.svg" class="dropdown__arrow">
                        <input type="checkbox" class="dropdown__check">
                    </a>
                    <div class="dropdown__content">
                        <ul class="dropdown__sub">
                            <li class="dropdown__li">
                                <a href="Actividad1P1.html" class="dropdown__anchor">Actividad 1</a>
                            </li>
                            <li class="dropdown__li">
                                <a href="Actividad2P1.html" class="dropdown__anchor">Actividad 2</a>
                            </li>
                            <li class="dropdown__li">
                                <a href="Actividad3P1.php" class="dropdown__anchor">Actividad 3</a>
                            </li>
                            <li class="dropdown__li">
                                <a href="Actividad4P1.php" class="dropdown__anchor">Actividad 4</a>
                            </li>
                            <li class="dropdown__li">
                                <a href="Actividad5P1.php" class="dropdown__anchor">Actividad 5</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="dropdown__list">
                    <a href="#" class="dropdown__link">
                        <img src="./assets/projects.svg" class="dropdown__icon">
                        <span class="dropdown__span">Segundo Periodo</span>
                        <img src="./assets/down.svg" class="dropdown__arrow">
                        <input type="checkbox" class="dropdown__check">
                    </a>
                    <div class="dropdown__content">
                        <ul class="dropdown__sub">
                            <li class="dropdown__li">
                                <a href="Actividad1P2.php" class="dropdown__anchor">Actividad 1</a>
                            </li>
                            <li class="dropdown__li">
                                <a href="Actividad2P2.php" class="dropdown__anchor">Actividad 2</a>
                            </li>
                            <li class="dropdown__li">
                                <a href="Quiz.php" class="dropdown__anchor">Quiz</a>
                            </li>
                            <li class="dropdown__li">
                                <a href="a.php" class="dropdown__anchor">Recuperacion</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="dropdown__list">
                    <a href="#" class="dropdown__link">
                        <img src="./assets/projects.svg" class="dropdown__icon">
                        <span class="dropdown__span">Tercer Periodo</span>
                        <img src="./assets/down.svg" class="dropdown__arrow">
                        <input type="checkbox" class="dropdown__check">
                    </a>
                    <div class="dropdown__content">
                    <ul class="dropdown__sub">
                            <li class="dropdown__li">
                                <a href="competenciasP3.php" class="dropdown__anchor">Competencias</a>
                            </li>
                            <li class="dropdown__li">
                                <a href="Actividad1P3.php" class="dropdown__anchor">Actividad 2</a>
                            </li>
                            <li class="dropdown__li">
                                <a href="Actividad3P3.php" class="dropdown__anchor">Actividad 3</a>
                            </li>
                            <li class="dropdown__li">
                                <a href="Quiz2.php" class="dropdown__anchor">Quiz</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <section class="home">
        <div class="home-Content">
        <h1>Registro de Ventas Diarias</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $totalVentas = 0;
            $diasSemana = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'];
            foreach ($diasSemana as $dia) {
                if (isset($_POST[$dia])) {
            $cantidad = (int)$_POST[$dia];
            $totalVentas += $cantidad;
        } else {
            echo "<p style='color: red;'>¡Asegúrate de ingresar una cantidad para todos los días!</p>";
            break;
        }
    }

    echo "<p>El total de ventas de la semana es: $totalVentas</p>";
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <?php
    $diasSemana = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'];

    foreach ($diasSemana as $dia) {
        echo "<label for='$dia'>$dia:</label>";
        echo "<input type='number' id='$dia' name='$dia' value='0'><br>";
    }
    ?>
    <input type="submit" value="Calcular">
</form>
    </section>
    <div class="container">
        <h1>Generación de Facturas Mensuales</h1>
        <button onclick="mostrarFacturas('Cliente A')">Ver Facturas Cliente A</button>
        <button onclick="mostrarFacturas('Cliente B')">Ver Facturas Cliente B</button>
        <button onclick="mostrarFacturas('Cliente C')">Ver Facturas Cliente C</button>
        <?php
        // Definir una lista de clientes y meses
        $clientes = ['Cliente A', 'Cliente B', 'Cliente C'];
        $meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
        foreach ($clientes as $cliente) {
            echo "<div class='facturas' id='facturas" . str_replace(' ', '', $cliente) . "'>";
            echo "<h2>Facturas para $cliente</h2>";
            echo "<ul>";
            foreach ($meses as $mes) {
                echo "<li>";
                echo "$mes - Factura 001 ";
                echo "<button class='imprimirBtn' onclick='imprimirFactura(\"$cliente\", \"$mes\")'>Imprimir Recibo</button>";
                echo "</li>";
            }
            echo "</ul>";
            echo "</div>";
        }
        ?>
    </div>
    <script>
        function mostrarFacturas(cliente) {
            var facturas = document.getElementsByClassName("facturas");
            for (var i = 0; i < facturas.length; i++) {
                facturas[i].style.display = "none";
            }
            document.getElementById("facturas" + cliente.replace(' ', '')).style.display = "block";
        }
        function imprimirFactura(cliente, mes) {
            alert("Imprimir recibo para " + cliente + " - " + mes);
        }
    </script>
    <?php
    // Simulación de datos de sueldos mensuales de empleados
    $sueldos = [2500, 3000, 3500, 4000, 4500];

    // Inicializar variables
    $totalSueldos = 0;
    $numEmpleados = 0;

    // Procesamiento con estructura do-while
    do {
        // Obtener el sueldo del empleado actual
        $sueldoEmpleado = current($sueldos);

        // Sumar el sueldo al total
        $totalSueldos += $sueldoEmpleado;

        // Mover al siguiente empleado
        next($sueldos);

        // Incrementar el contador de empleados
        $numEmpleados++;

    } while (key($sueldos) !== null);

    // Calcular el salario promedio
    $promedioSueldos = $totalSueldos / $numEmpleados;

    // Mostrar resultados
    echo "<h1>Procesamiento de Datos de Empleados</h1>";
    echo "<p>Total de sueldos: $totalSueldos</p>";
    echo "<p>Número de empleados: $numEmpleados</p>";
    echo "<p>Salario promedio: $promedioSueldos</p>";
    ?>
    <h1>Salario Promedio de Empleados</h1>
    <?php
    $sueldos = [2000, 2500, 1800, 3000, 2200];
    $totalSueldos = 0;
    $contadorEmpleados = 0;
    do {
        $totalSueldos += $sueldos[$contadorEmpleados];
        $contadorEmpleados++;
    } while ($contadorEmpleados < count($sueldos));
    if ($contadorEmpleados > 0) {
        $salarioPromedio = $totalSueldos / $contadorEmpleados;
        echo "<p>El salario promedio de los empleados es: $" . number_format($salarioPromedio, 2) . "</p>";
    } else {
        echo "<p>No hay empleados registrados.</p>";
    }
    ?>
    
    <style> 
    h1 {
    text-align: center;
    color: #333;
}
h2 {
    text-align: center;
    color: #333;
}

form {
    text-align: center;
    color: white;
    font-weight: bold;
}

input[type="number"] {
    padding: 8px;
    margin: 8px 0;
    width: 100%;
    box-sizing: border-box;
}
p {
    margin-top: 20px;
    font-weight: bold;
}
body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            padding: 10px 0;
            border-bottom: 1px solid #ccc;
        }

        button {
            padding: 8px 15px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-right: 10px;
        }

        button:hover {
            background-color: #0056b3;
        }

        .facturas {
            display: none;
        }

        .imprimirBtn {
            display: none;
            margin-left: 20px;
        }
    </style>
</body>
</html>