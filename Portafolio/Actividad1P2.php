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
            <div class="container">
                <h1>Verificador de Números</h1>
                <form action="Actividad1P2.php" method="post">
                    <label for="numero">Ingresa un número:</label>
                    <input type="number" id="numero" name="numero" required>
                    <button type="submit">Verificar</button>
                </form>
            </div>
        </div>

        <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["numero"])) {
                $numero = $_POST["numero"];
                $mensaje_signo = "";
                $mensaje_paridad = "";
                if ($numero > 0) {
                    $mensaje_signo = "Número positivo";
                    echo "<div class='positivo'>$mensaje_signo</div>";
                } elseif ($numero < 0) {
                    $mensaje_signo = "Número negativo";
                    echo "<div class='negativo'>$mensaje_signo</div>";
                } else {
                    $mensaje_signo = "El número es cero";
                    echo "<div class='cero'>$mensaje_signo</div>";
                }
                if ($numero % 2 == 0) {
                    $mensaje_paridad = "El número es par";
                    echo "<div class='par'>$mensaje_paridad</div>";
                } else {
                    $mensaje_paridad = "El número es impar";
                    echo "<div class='impar'>$mensaje_paridad</div>";
                }
            }
        }
        ?>

            <div class="container">
                <h1>Comparador de Números</h1>
                <form action="" method="post">
                    <label for="numero1">Número 1:</label>
                    <input type="number" id="numero1" name="numero1" required>
            <label for="numero2">Número 2:</label>
            <input type="number" id="numero2" name="numero2" required>
            <label for="numero3">Número 3:</label>
            <input type="number" id="numero3" name="numero3" required>
            <button type="submit">Comparar Números</button>
        </form>
        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["numero1"]) && isset($_POST["numero2"]) && isset($_POST["numero3"])) {
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];
        $numero3 = $_POST["numero3"];

        if ($numero1 == $numero2 && $numero2 == $numero3) {
            echo "<p>Los tres números son iguales.</p>";
        } else {
            $numeros = [$numero1, $numero2, $numero3];
            sort($numeros);
            $menor = $numeros[0];
            $medio = $numeros[1];
            $mayor = $numeros[2];

            echo "<p>El número menor es: $menor</p>";
            echo "<p>El número medio es: $medio</p>";
            echo "<p>El número mayor es: $mayor</p>";
        }
    } else {
        echo "<p>Por favor, ingresa los tres números.</p>";
    }
}
?>

    </div>  
    </div>
    <div class="containere">
        <h1>Menú de Restaurante</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="plato">Seleccione un plato:</label>
            <select name="plato" id="plato">
                <option value="1">Hamburguesa - $10</option>
                <option value="2">Pizza - $12</option>
                <option value="3">Ensalada - $8</option>
                <option value="4">Pasta - $11</option>
            </select>
            <button type="submit">Ver Precio</button>
        </form>
        <div class="resultt">
        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["plato"])) {
        $plato = $_POST["plato"];

        switch ($plato) {
            case 1:
                echo "<p>Ha seleccionado: Hamburguesa - $10</p>";
                break;
            case 2:
                echo "<p>Ha seleccionado: Pizza - $12</p>";
                break;
            case 3:
                echo "<p>Ha seleccionado: Ensalada - $8</p>";
                break;
            case 4:
                echo "<p>Ha seleccionado: Pasta - $11</p>";
                break;
            default:
                echo "<p>Por favor, seleccione un plato.</p>";
                break;
        }
    }
}
?>

        </div>
    </div>
    <style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
}

.container {
    width: 50%;
    margin: 50px auto;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    color: #333;
}

form {
    text-align: center;
}

label {
    font-weight: bold;
}

input[type="number"] {
    padding: 8px;
    margin: 8px 0;
    width: 100%;
    box-sizing: border-box;
}

button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

.positivo {
    background-color: green;
    color: blue;
    padding: 10px;
    text-align: center;
    margin-top: 20px;
}

.negativo {
    background-color: red;
    color: yellow;
    padding: 10px;
    text-align: center;
    margin-top: 20px;
}

.cero {
    background-color: gray;
    color: white;
    padding: 10px;
    text-align: center;
    margin-top: 20px;
}
.par {
    background-color: blue;
    color: white;
    padding: 10px;
    text-align: center;
    margin-top: 20px;
}

.impar {
    background-color: orange;
    color: black;
    padding: 10px;
    text-align: center;
    margin-top: 20px;
}
p {
    margin-top: 20px;
    font-weight: bold;
    }
    
.containere {
    max-width: 600px;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
.resultt {
    margin-top: 20px;
}

</style>
    </section> 
</body>
</html>