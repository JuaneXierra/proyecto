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
        <h1> Prueba PHP <h1>
        <img src="PHPimg.png" border="0"/>
        <?php 
        echo "<p>El modulo del PHP funciona correctamente...</p>"; 
        ?>
        <h1>Area de un triangulo</h1>
        <?php 
        $base=5;
        $altura = 8;
        $area = ($base * $altura) /2; 
        
        echo "<p> La base del triangulo es:". $base . "</p>";
        echo "<p> La altura del triangulo es:". $altura . "</p>";
        echo "<p> El area del triangulo es:". $area . "</p>";
        ?>
     <div class="container">
        <h1>Calculadora de IMC</h1>
        <form action="" method="post">
            <label for="altura">Altura (en metros):</label>
            <input type="text" name="altura" id="altura" required><br><br>
            <label for="peso">Peso (en kilogramos):</label>
            <input type="text" name="peso" id="peso" required><br><br>
            <input type="submit" value="Calcular IMC">
        </form>
        <div class="result">
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $altura = $_POST['altura'];
                $peso = $_POST['peso'];

                if ($altura != 0) {
                    $imc = $peso / ($altura * $altura);
                    echo "Tu IMC es: " . number_format($imc, 2);

                    if ($imc < 18.5) {
                        echo "<br>Bajo peso";
                    } elseif ($imc >= 18.5 && $imc < 25) {
                        echo "<br>Peso normal";
                    } elseif ($imc >= 25 && $imc < 30) {
                        echo "<br>Sobrepeso";
                    } else {
                        echo "<br>Obesidad";
                    }
                } else {
                    echo "La altura no puede ser cero.";
                }
            }
            ?>
        </div>
    </div>
</div>
<section id="galeria">
    <div class="gallery">
        <img src="Imagenes/imc.jpg" alt="Imagen 1">
    </div>
    <form action="Actividad3Opera.php" method="post">
    <input type="submit" value="Ir a página 2">
</form>
</section>
    </section> 
    <style>
        label {
            color: #555;
            line-height: 2;
            background-color: #fff;
            padding: 5px;
            border-radius: 5px;
        }
        .contenedor {
            display: flex;
            justify-content: space-between;
        }

        .formulario {
            width: 45%;
        }
        .result {
            text-align: center;
            margin-top: 20px;
            font-weight: bold;
            color: #333;
            width: 45%;
        }
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 10px;
            padding: 20px;
        }
        .gallery img {
            max-width: 100%;
            height: auto;
        }
    </style>
</body>
</html>