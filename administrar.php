<?php
    session_start();
    if(isset($_SESSION['nombre']))
    {
        $usuario=$_SESSION['nombre'];
        $tipo=$_SESSION['tipo'];
        $id=$_SESSION['id'];
    }else
    {
        header('location:session.php');
    }
?>

<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <title>Reservaciones</title>
  </head>
  <body>
    <div calss="contenedor">
        <header>
            <div>
                <img src="img/logo.png" alt="logo" id="logo">
            </div>
            <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="horarios.php">Horarios</a></li>
                <li><a href="administrar.php">Administrar</a></li>
            </ul>
            </nav>
        </header>
    </div>
    <article>
        <center><h1>Elegir la opción a modificar</h1></center>
        <br>
        <div class="container" mt-5>
            <div class="row">
                <div class="col-md-6">
                    <div class="alert alert-dark" role="alert">
                        MODIFICAR LOS HORARIOS
                        <a href="modificar/mod-horario.php" class="float-right">
                            <i class="far fa-edit"></i>
                        </a>
                    </div>
                    <div class="alert alert-dark" role="alert">
                        MODIFICAR LOS DESSTINOS
                        <a href="modificar/mod-destinos.php" class="float-right">
                            <i class="far fa-edit"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </article>

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