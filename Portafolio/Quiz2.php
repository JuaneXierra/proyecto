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
        </div>    
        <nav>
<?php

$Dias = array(
    array("Semana" => "Lunes", "Dia" => 1),
    array("Semana" => "Martes", "Dia" => 2),
    array("Semana" => "Miércoles", "Dia" => 3),
    array("Semana" => "Jueves", "Dia" => 4),
    array("Semana" => "Viernes", "Dia" => 5),
    array("Semana" => "Sábado", "Dia" => 6),
    array("Semana" => "Domingo", "Dia" => 7)
);

echo "<h3>Ejercicio 1: Días de la semana</h3>";
foreach ($Dias as $dia) {
    echo $dia['Semana'] . " es hoy, y su número de día de la semana es el: " . $dia['Dia'] . "<br>";
}
$productos = array(
    'Manzanas' => 2.5,
    'Plátanos' => 1.8,
    'Naranjas' => 3.2,
    'Peras' => 2.0
);
$producto_mas_caro = array_search(max($productos), $productos);

echo "<h3>Ejercicio 2: Producto más caro</h3>";
echo "El producto más caro de la tienda es: " . $producto_mas_caro . ", con un precio de " . max($productos) . " pesos colombianos<br>";


$Inventario = array( 
    array("Nombre" => "Manzanas", "Cantidad" => 10),
    array("Nombre" => "Plátanos", "Cantidad" => 6),
    array("Nombre" => "Naranjas", "Cantidad" => 15),
    array("Nombre" => "Peras", "Cantidad" => 8)
);

function Agregar(&$Inventario, $Nombre, $Cantidad) {
    $nuevoProducto = array("Nombre" => $Nombre, "Cantidad" => $Cantidad);
    array_push($Inventario, $nuevoProducto);
}

Agregar($Inventario, "Uvas", 5);
Agregar($Inventario, "Piñas", 2);

echo "<h3>Ejercicio 3: Inventario actualizado</h3>";
echo "Frutas agregadas:<br>";
foreach ($Inventario as $producto) {
    echo $producto["Nombre"] . ": " . $producto["Cantidad"] . "<br>";
}
?>

        </nav>
    </div>
    </section>
    <Style>
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

nav {
    background-color: #333;
    color: #fff;
    padding: 10px;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
}

.content {
    margin: 20px;
}
</Style>
</body>
</html>
<?php