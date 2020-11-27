<?php

session_start();
if(isset($_SESSION['nombre']))
{
    $usuario=$_SESSION['nombre'];
    $tipo=$_SESSION['tipo'];
}else
{
    $usuario='';
    $tipo='';
}
    include_once 'conexion.php';

    $sele = 'SELECT * FROM destino';
    $consulta = $pdo->prepare($sele);
    $consulta->execute();
    $resultado = $consulta->fetchAll();

    $selec = 'SELECT * FROM horario';
    $consulta2 = $pdo->prepare($selec);
    $consulta2->execute();
    $resultado2 = $consulta2->fetchAll();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mercado-boletos.com</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="contenedor">
        <header>
            <div>
                <img src="img/logo.png" alt="logo" id="logo">
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="horarios.php">Horarios</a></li>
                    <li>
                        <?php
                            if($tipo==1)
                            {
                                echo '<a href="administrar.php">Administrar</a>';
                            }else if($tipo==2)
                            {
                                echo '<a href="reservaciones.php">Reservaciones</a>';
                            }else
                            {
                                echo '<a href="sesion.php">Iniciar Sesion</a>';
                            }
                        ?>
                    </li>
                </ul>
            </nav>
        </header>
        <article>
            <br><br><center><h1 class="titulo">Horarios</h1></center><br><br>
            <center><h1 class="titulo">Tenemos viajes cada dos horas</h1></center><br><br>
            <table>
                <tr>
                    <th>Destino</th>
                    <th>Costo</th>
                </tr>
                <?php foreach($resultado as $dato): ?>
                <tr>
                    <td><?php  echo $dato['nombre']; ?></td>
                    <td><?php  echo $dato['costo']; ?></td>
                </tr>
                <?php endforeach ?>
            </table>
            <br><br>
            <table>
                <tr>
                    <th>Horarios</th>
                </tr>
                <?php foreach($resultado2 as $dato2): ?>
                <tr>
                    <td><?php  echo $dato2['hora']; ?></td>
                </tr>
                <?php endforeach ?>
            </table>
        </article>
    </div>
</body>