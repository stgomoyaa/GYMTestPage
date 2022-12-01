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
    <link rel="preload" href="../../CSS/styles.css" as="style">
    <link rel="stylesheet" href="../../CSS/styles.css">
    <link rel="stylesheet" href="../../CSS/membresia_style.css">
    <link rel="shortcut icon" href="https://img.icons8.com/windows/344/exercise.png">
</head>

<body>
    <div id="wrapper">
        <?php
        include '../Main/header.php';
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
                } elseif (isset($_SESSION['registrado'])) {
                echo '
                <a href="../../../PROYECTO/index.php">Inicio</a>
                <a href="../../../PROYECTO/GUI/Rutinas/rutinas.php">Rutinas Ejercicio</a>
                <a href="../../../PROYECTO/GUI/Dietas/dietas.php">Dietas</a>
                <a href="../../../PROYECTO/GUI/Suplementos/suplementos.php">Suplementos</a>
                <a href="../../../PROYECTO/GUI/Login/login.php">Iniciar Sesión</a>
                ';
                } else {
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
        </div>

        <hr>

        <?php
        include '../Membresia/membresia_content.php';
        include '../Main/footer.php';
        ?>
</body>

</html>