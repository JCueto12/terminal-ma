<?php
    include_once '../conexion.php';

    $id=$_GET['id'];

    $eliminar = 'DELETE FROM destino WHERE destino=?';
    $sentencia = $pdo->prepare($eliminar);
    $sentencia->execute(array($id));

    header('location:mod-destinos.php');

?>