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
    <h2>Registro de Notas Escolares</h2>
    <table>
        <tr>
            <th>Asignatura</th>
            <th>Estudiante</th>
            <th>Nota</th>
        </tr>
        <?php
        $notas = [
            "Matemáticas" => ["Juan" => 85,"María" => 92,"Pedro" => 78],
            "Ciencias" => ["Juan" => 88,"María" => 90,"Pedro" => 85],
            "Literatura" => ["Juan" => 80,"María" => 88,"Pedro" => 75]
        ];

        foreach ($notas as $asignatura => $estudiantes) {
            foreach ($estudiantes as $estudiante => $nota) {
                echo "<tr>";
                echo "<td>$asignatura</td>";
                echo "<td>$estudiante</td>";
                echo "<td>$nota</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
    <h2>Lista de Tareas Pendientes</h2>
        <ul>
            <?php
            $tareas = [
                "Estudiar para el examen de matemáticas",
                "Terminar el proyecto de programación",
                "Hacer la tarea de historia",
                "Preparar la presentación de inglés",
                "Llamar al banco para resolver un problema"
            ];

            if (isset($_GET['completada'])) {
                $indice = $_GET['completada'];
                if (isset($tareas[$indice])) {
                    $tareas[$indice] .= " *";
                }
            }
            foreach ($tareas as $key => $tarea) {
                echo "<li>";
                echo ($key + 1) . ". ";
                if (strpos($tarea, '*') !== false) {
                    echo "<span class='completada'>" . str_replace('*', '', $tarea) . "</span>";
                } else {
                    echo $tarea;
                }
                echo " <a href='?completada=$key'>Marcar como completada</a>";
                echo "</li>";
            }
            ?>
        </ul>
        <button><a href="Actividad3pp3.php">Para Tercer Punto</a></button>
</div>
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
        body {
            font-family: Arial, sans-serif;
        }
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            color: white;
        }
        h2 {
            color: white;
        }
        h4 {
            color :white;
        }
        th {
            background-color: #f2f2f2;
        }
        li {
            margin-bottom: 10px;
            color: white;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        .completada {
            text-decoration: line-through;
        }
        br {
            color: black;
        }
        th {
            color: black;
        }
    </style>
</body>
</html>