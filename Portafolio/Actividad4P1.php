<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma de 2 numeros en PHP<</title>
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

        <h2>Suma de 2 numeros en PHP</h2>
        <form action="Actividad4P1.php" method="POST">
            <table>
                <tr>
                    <td><input type="text" name="numero1"></td>
                </tr>
                <tr>
                    <td><input type="text" name="numero2"></td>
                    </tr>
                    <tr>
                        <td> <input type="submit" value="Sumar"> </td>
                    </tr>
                </table>
        </form>
        <?php
        if(isset($_POST['numero1']) && isset($_POST['numero2'])) {
            $num1 = $_POST['numero1'];
            $num2 = $_POST['numero2'];
            $suma = $num1 + $num2;
            echo "<p style='color: green;'>La suma de: $num1 y $num2 es: $suma</p>";
        } else {
            echo "<p style='color: red;'>Por favor, ingrese ambos números.</p>";
        }
        ?>

        <h1>Calculadora de Nota Definitiva</h1>
    <form action="" method="post">
        <label for="nota1">Nota 1:</label>
        <input type="number" name="nota1" id="nota1" min="0" max="5" step="0.01" required>
        <label for="nota2">Nota 2:</label>
        <input type="number" name="nota2" id="nota2" min="0" max="5" step="0.01" required>
        <label for="nota3">Nota 3:</label>
        <input type="number" name="nota3" id="nota3" min="0" max="5" step="0.01" required>
        <label for="notaFinal">Nota Final:</label>
        <input type="number" name="notaFinal" id="notaFinal" min="0" max="5" step="0.01" required>
        <input type="submit" value="Calcular Nota Definitiva">
    </form>
    <div class="result">
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if(isset($_POST['nota1']) && isset($_POST['nota2']) && isset($_POST['nota3']) && isset($_POST['notaFinal'])) {
                $nota1 = $_POST['nota1'];
                $nota2 = $_POST['nota2'];
                $nota3 = $_POST['nota3'];
                $notaFinal = $_POST['notaFinal'];
                $notaDefinitiva = ($nota1 + $nota2 + $nota3 + $notaFinal) / 4;
                echo "<p>La nota definitiva del estudiante es: " . number_format($notaDefinitiva, 2) . "</p>";
            } else {
                echo "<p>Por favor, ingrese todas las notas.</p>";
            }
        }
        ?>
        </div>
        <h1>Calculadora de Áreas</h1>
        <form action="" method="post">
            <label for="figura">Seleccione la figura geométrica:</label>
            <select name="figura" id="figura">
                <option value="cuadrado">Cuadrado</option>
                <option value="rectangulo">Rectángulo</option>
                <option value="triangulo">Triángulo</option>
                <option value="circulo">Círculo</option>
            </select>
            <br>
            <label for="lado">Lado:</label>
            <input type="number" name="lado" id="lado">
            <br>
            <label for="base">Base:</label>
            <input type="number" name="base" id="base">
            <br>    
            <label for="altura">Altura:</label>
            <input type="number" name="altura" id="altura">
            <br>
            <label for="radio">Radio:</label>
            <input type="number" name="radio" id="radio">
            <br>
            <input type="submit" value="Calcular">
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['figura'])) {
                $figura = $_POST['figura'];
                $area = 0;
                switch ($figura) {
                    case 'cuadrado':
                        if(isset($_POST['lado'])) {
                            $lado = $_POST['lado'];
                            $area = $lado * $lado;
                            echo "<p>El área del cuadrado es: $area</p>";
                        } else {
                            echo "<p>Falta ingresar el lado del cuadrado</p>";
                        }
                break;
                case 'rectangulo':
                    if(isset($_POST['base']) && isset($_POST['altura'])) {
                        $base = $_POST['base'];
                        $altura = $_POST['altura'];
                        $area = $base * $altura;
                        echo "<p>El área del rectángulo es: $area</p>";
                    } else {
                        echo "<p>Falta ingresar la base y/o la altura del rectángulo</p>";
                    }
                    break;
                    case 'triangulo':
                        if(isset($_POST['base']) && isset($_POST['altura'])) {
                            $base = $_POST['base'];
                            $altura = $_POST['altura'];
                            $area = ($base * $altura) / 2;
                            echo "<p>El área del triángulo es: $area</p>";
                        } else {
                            echo "<p>Falta ingresar la base y/o la altura del triángulo</p>";
                        }
                break;
                case 'circulo':
                    if(isset($_POST['radio'])) {
                        $radio = $_POST['radio'];
                        $area = pi() * ($radio * $radio);
                        echo "<p>El área del círculo es: $area</p>";
                    } else {
                        echo "<p>Falta ingresar el radio del círculo</p>";
                    }
                    break;
            default:
            echo "<p>Seleccione una figura geométrica</p>";
        }
    } else {
        echo "<p>No se ha seleccionado ninguna figura geométrica</p>";
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