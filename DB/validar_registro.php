<?php
session_start();
include('db.php'); // Relacionamos el archivo a la base de datos

$usuario = stripslashes($_REQUEST['usuario']);
$usuario = mysqli_real_escape_string($conexion, $usuario);

$password = stripslashes($_REQUEST['password']);
$password = mysqli_real_escape_string($conexion, $password);

$query = "INSERT into `usuarios` (usuario, pass)
VALUES ('$usuario', '$password')";
$result = mysqli_query($conexion, $query);
$_SESSION['registrado'] = $usuario;
header("Location: ../GUI/Login/login.php");
?>