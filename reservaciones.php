<?php
    session_start();
    include_once 'conexion.php';
    if(isset($_SESSION['nombre']))
    {
        $usuario=$_SESSION['nombre'];
        $tipo=$_SESSION['tipo'];
        $id=$_SESSION['id'];
    }else
    {
        header('location:session.php');
    }

    $sele = 'SELECT * FROM destino';
    $consulta = $pdo->prepare($sele);
    $consulta->execute();
    $resultado = $consulta->fetchAll();

    $sele2 = 'SELECT * FROM horario';
    $consulta2 = $pdo->prepare($sele2);
    $consulta2->execute();
    $resultado2 = $consulta2->fetchAll();

    $sele3 = 'SELECT * FROM transporte';
    $consulta3 = $pdo->prepare($sele3);
    $consulta3->execute();
    $resultado3 = $consulta3->fetchAll();
?>

<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Reservaciones</title>
  </head>
  <body>
    <div calss="contenedor">
        <header>
            <nav>
                <ul>
                    <li>
                        <a href="cerrar.php">
                            <?php
                                if($usuario<>'')
                                {
                                    echo $usuario;
                                }else
                                {
                                    header('location:index.php');
                                }
                            ?>
                        </a>
                    </li>
                </ul>
            </nav>
            <div>
                <img src="img/logo.png" alt="logo" id="logo">
            </div>
            <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="horarios.php">Horarios</a></li>
                <li><a href="reservaciones.php">Reservaciones</a></li>
            </ul>
            </nav>
        </header>
    </div>

    <article>
        <center><h1>Seleccionar sus preferencias</h1></center>
        <table>
                <tr>
                    <th>Número de Viaje</th>
                    <th>Destino</th>
                    <th>Costo</th>
                </tr>
                <?php foreach($resultado as $dato): ?>
                <tr>
                <td><?php  echo $dato['destino']; ?></td>
                    <td><?php  echo $dato['nombre']; ?></td>
                    <td><?php  echo $dato['costo']; ?></td>
                </tr>
                <?php endforeach ?>
        </table><br><br>
        <table>
                <tr>
                    <th>Número Horario</th>
                    <th>Hora</th>
                </tr>
                <?php foreach($resultado2 as $dato2): ?>
                <tr>
                <td><?php  echo $dato2['horario']; ?></td>
                    <td><?php  echo $dato2['hora']; ?></td>
                </tr>
                <?php endforeach ?>
        </table><br><br>
        <table>
                <tr>
                    <th>Número Transporte</th>
                    <th>Marca</th>
                </tr>
                <?php foreach($resultado3 as $dato3): ?>
                <tr>
                <td><?php  echo $dato3['transporte']; ?></td>
                    <td><?php  echo $dato3['marca']; ?></td>
                </tr>
                <?php endforeach ?>
        </table><br><br>

        <form action="reser.php" method="post">
            <label>Número de Destino</label>
            <input type="number" name="dest" min="1" max="4"><br>
            <label>Número de Horario</label>
            <input type="number" name="hora" min="1" max="14"><br>
            <label>Número de Transporte</label>
            <input type="number" name="tran" min="1" max="3"><br>
            <button type="submit">Guardar</button>
        </form>
    </article>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>