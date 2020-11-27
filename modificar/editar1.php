<?php
    $id=$_GET['id'];
    $hora=$_GET['hora'];


    include_once '../conexion.php';

    $editar = 'UPDATE horario  SET hora=? WHERE horario=?';
    $sentencia = $pdo->prepare($editar);
    $sentencia->execute(array($hora,$id));

     header('location:mod-horario.php');
?>