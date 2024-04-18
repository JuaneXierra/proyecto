<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primera pagina con PHP....</title>
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
        <h1>Calculadora Básica</h1>
        <form action="" method="post">
            <label for="num1">Número 1:</label>
            <input type="number" name="num1" id="num1" required>
            <label for="num2">Número 2:</label>
            <input type="number" name="num2" id="num2" required>
            <input type="submit" name="sumar" value="Sumar">
            <input type="submit" name="restar" value="Restar">
            <input type="submit" name="multiplicar" value="Multiplicar">
            <input type="submit" name="dividir" value="Dividir">
        </form>
        <div class="result">
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['num1']) && isset($_POST['num2'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];    
            if (isset($_POST['sumar'])) {    
                $resultado = $num1 + $num2;
                echo "La suma de $num1 y $num2 es: $resultado";
            } elseif (isset($_POST['restar'])) {
                $resultado = $num1 - $num2;
                echo "La resta de $num1 y $num2 es: $resultado";
            } elseif (isset($_POST['multiplicar'])) {
                $resultado = $num1 * $num2;
                echo "La multiplicación de $num1 y $num2 es: $resultado";
            } elseif (isset($_POST['dividir'])) {
                if ($num2 != 0) {
                    $resultado = $num1 / $num2;
                    echo "La división de $num1 y $num2 es: $resultado";
                } else {
                    echo "No se puede dividir por cero";
                }
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
            margin-top: 20px;
            padding: 10px;
            background-color: #f0f0f0;
            border-radius: 5px;
        }
    </style>
</body>
</html>