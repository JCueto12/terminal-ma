<?php
include_once 'conexion.php';
if($_POST){
    $destino=$_POST['dest'];
    $horario=$_POST['hora'];
    $transporte=$_POST['tran'];


    $agregar = 'INSERT INTO viaje (destino,horario,transporte) VALUES (?,?,?)';
    $sentencia_agregar = $pdo->prepare($agregar);
    $sentencia_agregar->execute(array($destino,$horario,$transporte));
    header('Location:index.php'); 
}
?>