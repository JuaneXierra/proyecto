<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio</title>
    <link rel="stylesheet" href="./estilos.css">
</head>
<style>
    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
    }
    h1, h2, p {
        text-align: center;
    }
    h1 {
        color: white;
    }
    button {
        background-color: #333;
        color: white;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        margin-bottom: 10px;
        display: block;
        width: 100%;
    }
    .respuesta {
        display: none;
        background-color: white;
        padding: 10px;
        margin-top: 10px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
</style>
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
        <div class="container">
            <h1>Competencias</h1>
            <button onclick="mostrarRespuesta('respuesta1')">¿Qué es un recurso frontend y cuál es su función en el desarrollo web?</button>
            <div id="respuesta1" class="respuesta">
                <h2>Respuesta:</h2>
                <p>Un recurso frontend es cualquier elemento utilizado en la interfaz de usuario de una aplicación web que es accesible para el usuario final. Su función principal es facilitar una experiencia interactiva y atractiva para los usuarios al presentar información de manera visual y permitir la interacción con la aplicación.</p>
            </div>
        
            <button onclick="mostrarRespuesta('respuesta2')">¿Cuáles son las principales tecnologías o herramientas utilizadas en el desarrollo frontend y por qué son importantes?</button>
            <div id="respuesta2" class="respuesta">
                <h2>Respuesta:</h2>
                <p>Las principales tecnologías en el desarrollo frontend son HTML, CSS y JavaScript. HTML define la estructura del contenido, CSS controla su presentación y diseño, y JavaScript agrega interactividad y dinamismo. Estas tecnologías son fundamentales para crear interfaces web modernas y funcionales, lo que mejora la experiencia del usuario y la accesibilidad del sitio.</p>
            </div>
        
            <button onclick="mostrarRespuesta('respuesta3')">Describe el concepto de responsividad en el diseño web y menciona al menos dos técnicas para lograrlo.</button>
            <div id="respuesta3" class="respuesta">
                <h2>Respuesta:</h2>
                <p>La responsividad en el diseño web se refiere a la capacidad de un sitio para adaptarse y renderizarse correctamente en diferentes dispositivos y tamaños de pantalla. Dos técnicas para lograr la responsividad son el diseño fluido, que utiliza porcentajes en lugar de unidades fijas para dimensiones, y los Media Queries, que permiten aplicar estilos específicos según el tamaño de la pantalla y el dispositivo utilizado.</p>
            </div>
        
            <button onclick="mostrarRespuesta('respuesta4')">¿Cuál es la diferencia entre HTML, CSS y JavaScript en el contexto del desarrollo frontend? Explique brevemente el papel de cada uno de estos lenguajes.</button>
            <div id="respuesta4" class="respuesta">
                <h2>Respuesta:</h2>
                <p>HTML (Hypertext Markup Language) define la estructura del contenido de una página web, CSS (Cascading Style Sheets) controla la presentación y el diseño, y JavaScript agrega interactividad y dinamismo al sitio. En resumen, HTML estructura la información, CSS le da estilo y diseño, y JavaScript proporciona la interactividad para mejorar la experiencia del usuario.</p>
            </div>
        
            <button onclick="mostrarRespuesta('respuesta5')">Habla sobre la importancia de la accesibilidad en el diseño frontend y menciona al menos dos prácticas para mejorar la accesibilidad en una página web.</button>
            <div id="respuesta5" class="respuesta">
                <h2>Respuesta:</h2>
                <p>La accesibilidad en el diseño frontend es crucial para garantizar que todas las personas, incluidas aquellas con discapacidades, puedan acceder y utilizar un sitio web. Dos prácticas para mejorar la accesibilidad son utilizar etiquetas semánticas en HTML para estructurar correctamente el contenido y agregar atributos alt en las imágenes para describirlas para usuarios con discapacidad visual.</p>
            </div>
        
            <button onclick="mostrarRespuesta('respuesta6')">Explora el concepto de frameworks frontend y proporciona ejemplos de al menos dos de ellos. ¿Por qué los desarrolladores utilizan frameworks en lugar de escribir todo el código desde cero?</button>
            <div id="respuesta6" class="respuesta">
                <h2>Respuesta:</h2>
                <p>Los frameworks frontend son conjuntos de herramientas y bibliotecas predefinidas que simplifican y agilizan el desarrollo web. Ejemplos incluyen React.js, que se centra en la construcción de interfaces de usuario interactivas, y Angular.js, que ofrece un marco completo para el desarrollo de aplicaciones web SPA (Single Page Application). Los desarrolladores utilizan frameworks para aprovechar la eficiencia y la consistencia que ofrecen, además de la comunidad de soporte y la documentación disponible.</p>
            </div>
        
            <button onclick="mostrarRespuesta('respuesta7')">En el contexto del desarrollo frontend, ¿cuál es la diferencia entre un CMS (Sistema de Gestión de Contenidos) y un framework? Proporciona ejemplos de ambos.</button>
            <div id="respuesta7" class="respuesta">
                <h2>Respuesta:</h2>
                <p>Un CMS (Sistema de Gestión de Contenidos) como WordPress o Joomla es una plataforma completa que incluye herramientas para crear, administrar y publicar contenido web, mientras que un framework como React.js o Angular.js es una colección de herramientas y bibliotecas que facilitan el desarrollo de aplicaciones web, pero no incluyen funcionalidades de gestión de contenido.</p>
            </div>
        
            <button onclick="mostrarRespuesta('respuesta8')">¿Qué es un array en PHP?</button>
            <div id="respuesta8" class="respuesta">
                <h2>Respuesta:</h2>
                <p>Un array en PHP es una estructura de datos que puede contener múltiples valores bajo un solo nombre. Puede contener una lista de elementos, como números, cadenas o incluso otros arrays.</p>
            </div>
        
            <button onclick="mostrarRespuesta('respuesta9')">En PHP, se puede crear un array de varias maneras, describe cada una con su ejemplo.</button>
            <div id="respuesta9" class="respuesta">
                <h2>Respuesta:</h2>
                <p>Se puede crear un array en PHP utilizando la función array(), la sintaxis de corchetes [] o mediante la creación de un array asociativo. Por ejemplo: <br>
                // Utilizando la función array()<br>
                $numeros = array(1, 2, 3, 4, 5);<br>
                // Utilizando la sintaxis de corchetes []<br>
                $colores = ['rojo', 'verde', 'azul'];<br>
                // Creando un array asociativo<br>
                $persona = ['nombre' => 'Juan', 'edad' => 30, 'ciudad' => 'Madrid'];</p>
            </div>
        
            <button onclick="mostrarRespuesta('respuesta10')">¿Qué operaciones con arrays se pueden realizar para manipular y trabajar datos?</button>
            <div id="respuesta10" class="respuesta">
                <h2>Respuesta:</h2>
                <p>En PHP, se pueden realizar varias operaciones con arrays, como agregar elementos (array_push()), eliminar elementos (unset()), ordenar elementos (sort()), buscar valores (in_array()), obtener claves y valores (array_keys(), array_values()), entre otras.</p>
            </div>
        
            <button onclick="mostrarRespuesta('respuesta11')">Desarrolla 2 ejemplos prácticos que se evidencien Arrays, describe su enunciado problema</button>
            <div id="respuesta11" class="respuesta">
                <h2>Respuesta:</h2>
                <p><strong>Ejemplo 1:</strong> Enunciado del problema: Crear un array de nombres y mostrarlos en una lista HTML.</p>
                <pre><code>
                <?php
                $nombres = ['Juan', 'María', 'Pedro', 'Ana'];
                echo '<ul>';
                foreach ($nombres as $nombre) {
                    echo '<li>' . $nombre . '</li>';
                }
                echo '</ul>';
                ?>
                </code></pre>
                <p><strong>Ejemplo 2:</strong> Enunciado del problema: Calcular el promedio de un conjunto de números almacenados en un array.</p>
                <pre><code>
                <?php
                $numeros = [10, 15, 20, 25, 30];
                $total = array_sum($numeros);
                $promedio = $total / count($numeros);
                echo 'El promedio es: ' . $promedio;
                ?>
                </code></pre>
            </div>
        </div>
    </section>
    <script>
        function mostrarRespuesta(idRespuesta) {
            var respuesta = document.getElementById(idRespuesta);
            if (respuesta.style.display === "none") {
                respuesta.style.display = "block";
            } else {
                respuesta.style.display = "none";
            }
        }
    </script>
</body>
</html>