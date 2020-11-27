<?php
    session_start();
    include_once 'conexion.php';

    $correo=$_POST['email'];
    $password=$_POST['pass'];

    
    $leer = 'SELECT * FROM usuario WHERE correo=?';
    $consulta = $pdo->prepare($leer);
    $consulta->execute(array($correo));
    $resultado = $consulta->fetch();


    if(!$resultado){
        echo '</br>NO Existe este usuario';
        die();
    }

    if(password_verify($password,$resultado['contra']))
    {
        $_SESSION['nombre'] = $correo;
        $_SESSION['tipo']=$resultado['tipo'];
        $_SESSION['id']=$resultado['usuario'];
        header('location:index.php');
    }else
    {
        echo 'Contraseña incorrecta';
        die();
    }
?>