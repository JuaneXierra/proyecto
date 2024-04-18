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
        <h1>Calculadora de Descuento</h1>
            <form action="" method="post">
                <label for="totalCompra">Monto Total de la Compra:</label>
                <input type="number" name="totalCompra" id="totalCompra" required min="0" step="0.01">
                <input type="submit" value="Calcular Descuento">
            </form>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["totalCompra"])) {
                $totalCompra = $_POST["totalCompra"];
                $descuento10 = 100;
                $descuento5 = 50;
                $porcentajeDescuento = 0;
                $montoDescuento = 0;
                if ($totalCompra >= $descuento10) {
                    $porcentajeDescuento = 10;
                    $montoDescuento = $totalCompra * 0.1;
                } elseif ($totalCompra >= $descuento5) {
                    $porcentajeDescuento = 5;
                    $montoDescuento = $totalCompra * 0.05;
                }
                $montoFinal = $totalCompra - $montoDescuento;
                echo "<h2>Resultados:</h2>";
                echo "<p>Monto Original: $ $totalCompra</p>";
                echo "<p>Porcentaje de Descuento: $porcentajeDescuento %</p>";
                echo "<p>Monto de Descuento: $ $montoDescuento</p>";
                echo "<p>Monto Final después del Descuento: $ $montoFinal</p>";
            }
            ?>
            <h1>Acceso a la Aplicación</h1>
            <form action="" method="post">
                <label for="username">Nombre de Usuario:</label>
                <input type="text" name="username" id="username" required>
                <br>
                <label for="password">Contraseña:</label>
                <input type="password" name="password" id="password" required>
                <br>
                <input type="submit" value="Ingresar">
            </form>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (isset($_POST['username']) && isset($_POST['password'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $usuario_valido = 'usuario';
                    $contrasena_valida = 'contrasena';
                    if ($username === $usuario_valido && $password === $contrasena_valida) {
                        echo "<p>Bienvenido, $username. Acceso completo concedido.</p>";
                    } else {
                        echo "<p>Usuario o contraseña incorrectos. Acceso limitado para usuarios invitados.</p>";
                    }
                } else {
                    echo "<p>Por favor, ingrese tanto el nombre de usuario como la contraseña.</p>";
                }
            }
            ?>
            <h1>Comentarios de Calificaciones</h1>
            <form action="" method="post">
                <label for="calificacion">Calificación del estudiante:</label>
                <input type="number" name="calificacion" id="calificacion" min="0" max="100" required>
                <input type="submit" value="Evaluar">
            </form>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST["calificacion"])) {
                    $calificacion = $_POST["calificacion"];
                    if ($calificacion >= 90) {
                        echo "<p>Excelente trabajo. ¡Felicidades por tu sobresaliente rendimiento!</p>";
                    } elseif ($calificacion >= 80 && $calificacion <= 89) {
                        echo "<p>Buen trabajo. Tu esfuerzo está rindiendo frutos.</p>";
                    } elseif ($calificacion >= 70 && $calificacion <= 79) {
                        echo "<p>Aprobado. Sigue esforzándote para mejorar tus resultados.</p>";
                    } else {
                        echo "<p>No aprobado. Te animamos a buscar ayuda adicional y mejorar en la siguiente evaluación.</p>";
                    }
                } else {
                    echo "<p>Por favor, ingresa una calificación.</p>";
                }
            }
            ?>
        </div>
    </section>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background:#081b29;
        }
        h1 {
            text-align: center;
        }
        h2 {
            color: white;
        }
        form {
            margin-top: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        label {
            width: 45%;
            margin-bottom: 10px;
            color: white;
        }
        input {
            width: 45%;
            margin-bottom: 10px;
            color: Black;
        }
        input[type="submit"] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 10px;
            font-weight: bold;
        }
        .home {
            height: 130vh ;
        }
    </style>
</body>
</html>