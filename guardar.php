<?php
include_once 'conexion.php';
if($_POST){
    $nombre=$_POST['nombre'];
    $direccion=$_POST['dir'];
    $telefono=$_POST['tel'];
    $correo=$_POST['correo'];
    $password=$_POST['contra'];
    $password2=$_POST['contra2'];

    if($password!=$password2)
    {
        echo 'Contraseñas Incorrectas';
        header('Location:registro.php'); 
        die();
    }

    $pass=password_hash($password, PASSWORD_DEFAULT);
    $agregar = 'INSERT INTO usuario (nombre,direccion,telefono,correo,contra,tipo) VALUES (?,?,?,?,?,?)';
    $sentencia_agregar = $pdo->prepare($agregar);
    $sentencia_agregar->execute(array($nombre,$direccion,$telefono,$correo,$pass,2));
    header('Location:sesion.php'); 
}
?>