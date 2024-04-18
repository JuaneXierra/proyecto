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
        <div class="content">
            <?php
            if (!function_exists('generarYMostrarNumeros')) {
                function generarYMostrarNumeros() {
                    $numeros = array();
                    for ($i = 0; $i < 10; $i++) {
                        $numeros[] = rand(0, 100);
                    }

                    $numeros_pares = array();
                    $numeros_impares = array();
                    foreach ($numeros as $numero) {
                        if ($numero % 2 == 0) {
                            $numeros_pares[] = $numero;
                        } else {
                            $numeros_impares[] = $numero;
                        }
                    }
                    echo "<table>";
                    echo "<tr><th>Números</th><th>Pares</th><th>Impares</th></tr>";
                    $numeros_count = count($numeros);
                    for ($i = 0; $i < $numeros_count; $i++) {
                        echo "<tr>";
                        echo "<td id='numero_$i'>" . $numeros[$i] . "</td>";
                        echo "<td>" . (isset($numeros_pares[$i]) ? $numeros_pares[$i] : '') . "</td>";
                        echo "<td>" . (isset($numeros_impares[$i]) ? $numeros_impares[$i] : '') . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                }
            }
            generarYMostrarNumeros();
            ?>
            <script>
            for (let i = 0; i < 10; i++) {
                document.getElementById('numero_' + i).addEventListener('click', function() {
                    alert('Número: ' + this.innerHTML + '\nNúmeros Pares: ' + this.nextElementSibling.innerHTML + '\nNúmeros Impares: ' + this.nextElementSibling.nextElementSibling.innerHTML);
                });
                }
                </script>
                    <h2>Insertar valores en un arreglo</h2>
                    <form method="post">
                        <label for="valor">Ingrese un valor:</label>
                        <input type="text" id="valor" name="valor">
                        <button type="submit">Agregar</button>
                    </form>
                    <?php
   
    $valores = array();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nuevo_valor = $_POST["valor"];
        if (!empty($nuevo_valor)) {
            $valores[] = $nuevo_valor;
        }
    }

    if (!empty($valores)) {
        echo "<h3>Valores en el arreglo:</h3>";
        echo "<ul>";
        foreach ($valores as $valor) {
            echo "<li>$valor</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No hay valores ingresados aún.</p>";
    }
    ?>
        </div>
    </section>
    <Style>
    h2, li {
        color: WHITE;
        font-size: 20px;
    }
    h1 {
        text-align: center;
        color: #333;
        font-size: 36px;
    }
    form {
        text-align: center;
        color: white;
        font-weight: bold;
    }
    p {
        margin-top: 20px;
        font-weight: bold;
    }
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}
body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
}
table {
    border-collapse: collapse;
    margin: 20px;
}
table, th, td {
            border: 1px solid #dddddd;
        }

        th, td {
            padding: 15px;
            text-align: center;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        td {
            background-color: white;
            cursor: pointer;
        }
    </style>
</body>
</html>