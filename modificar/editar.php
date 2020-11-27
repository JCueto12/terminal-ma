<?php
    $id=$_GET['id'];
    $nombre=$_GET['nombre'];
    $dist=$_GET['dist'];
    $costo=$_GET['costo'];

    include_once '../conexion.php';

    $editar = 'UPDATE destino  SET nombre=?,distancia=?,costo=? WHERE destino=?';
    $sentencia = $pdo->prepare($editar);
    $sentencia->execute(array($nombre,$dist,$costo,$id));

     header('location:mod-destinos.php');
?>