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
    <link rel="shortcut icon" href="https://img.icons8.com/windows/344/exercise.png">
</head>

<body>
    <?php
    if (isset($_SESSION['error_login'])) {
        echo '<script> alert("Usuario o contraseña incorrecto(s)"); </script>';
        $_SESSION['error_login'] = null;
    }
    ?>

    <div id="wrapper">
        <?php
        include '../Main/header.php';
        include '../../GUI/Nav/navegacion.php';
        ?>
        <div class="contenedor">
            <form action="../../DB/validar_registro.php" method="post" align="center">
                <h2 class="titulo">REGISTRATE</h2>
                <label>Usuario</label><br>
                <input type="text" placeholder="Nombre de usuario" name="usuario"><br>
                <label>Contraseña</label><br>
                <input type="password" placeholder="Contraseña" name="password"><br><br>
                <input type="submit" value="Ingresar">
            </form>
        </div>

        <?php
        include '../Main/footer.php';
        ?>
    </div>
</body>

</html>