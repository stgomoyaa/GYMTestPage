<?php
session_start();
include('db.php'); // Relacionamos el archivo a la base de datos

$USUARIO=$_POST['usuario']; // Asignamos el usuario a la variable
$PASSWORD=$_POST['password']; // Asignamos el usuario a la variable

$statement = $conexion->prepare("SELECT * FROM usuarios WHERE usuario = ? AND pass = ?");
$statement->bind_param("ss", $USUARIO, $PASSWORD);
$statement->execute();

if($statement->fetch()){
    $_SESSION['usuario'] = $USUARIO;
    header("Location: ../index.php");
}
else{
    $_SESSION['error_login'] = true;
    header("Location: ../GUI/Login/login.php");
}
