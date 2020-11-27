<?php
    include_once '../conexion.php';

    $id=$_GET['id'];

    $eliminar = 'DELETE FROM horario WHERE horario=?';
    $sentencia = $pdo->prepare($eliminar);
    $sentencia->execute(array($id));

    header('location:mod-horario.php');

?>