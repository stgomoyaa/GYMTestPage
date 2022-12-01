<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TITANES GYM</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Akshar:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preload" href="css/styles.css" as = "style">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/gym-%7C-sports-%7C-fitness-center-logo-template-design-207f63f24827f7e3878f6ad881eb4c9c_screen.jpg?ts=1613334672">
</head>
<body>
    <?php
        if (isset($_SESSION['usuario'])) {
            echo '<script> alert("¡Bienvenido ' . $_SESSION['usuario'] . '!"); </script>';
        }
    ?>
    <div id="wrapper">
    <?php
        include 'GUI/Main/header.php';
        ?>
        <div class="nav-bg">
            <nav class="navegacion-principal contenedor">
                <?php
                if (isset($_SESSION['usuario'])) {
                    echo '
                    <a href="../../../PROYECTO/index.php">Inicio</a>
                    <a href="../../../PROYECTO/GUI/Rutinas/rutinas.php">Rutinas Ejercicio</a>
                    <a href="../../../PROYECTO/GUI/Dietas/dietas.php">Dietas</a>
                    <a href="../../../PROYECTO/GUI/Suplementos/suplementos.php">Suplementos</a>
                    <a href="../../../PROYECTO/GUI/Membresia/membresia.php">Membresía</a>
                    <a href="../../../PROYECTO/CTL/logout.php">Cerrar Sesión</a>
                ';
                } elseif(isset($_SESSION['registrado'])){
                    echo '
                    <a href="../../../PROYECTO/index.php">Inicio</a>
                    <a href="../../../PROYECTO/GUI/Rutinas/rutinas.php">Rutinas Ejercicio</a>
                    <a href="../../../PROYECTO/GUI/Dietas/dietas.php">Dietas</a>
                    <a href="../../../PROYECTO/GUI/Suplementos/suplementos.php">Suplementos</a>
                    <a href="../../../PROYECTO/GUI/Login/login.php">Iniciar Sesión</a>
                ';
                }else{
                    echo '
                    <a href="../../../PROYECTO/index.php">Inicio</a>
                    <a href="../../../PROYECTO/GUI/Rutinas/rutinas.php">Rutinas Ejercicio</a>
                    <a href="../../../PROYECTO/GUI/Dietas/dietas.php">Dietas</a>
                    <a href="../../../PROYECTO/GUI/Suplementos/suplementos.php">Suplementos</a>
                    <a href="../../../PROYECTO/GUI/Login/login.php">Iniciar Sesión</a>
                    <a href="../../../PROYECTO/GUI/Register/register.php">Registrate</a>
                ';
                }
                ?>
            </nav>
        </div>

        <hr>
        <?php
            include 'GUI/Index/index_content.php';
            include 'GUI/Main/footer.php';
    ?>
    </div>
</body>
</html>