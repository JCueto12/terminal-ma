<?php
    include_once '../conexion.php';

    //leer
    $sele = 'SELECT * FROM destino';
    $consulta = $pdo->prepare($sele);
    $consulta->execute();
    $resultado = $consulta->fetchAll();


    //agregar
    if($_POST)
    {
        $name=$_POST['nombre'];
        $dist=$_POST['dist'];
        $costo=$_POST['costo'];

        $agregar = 'INSERT INTO destino (nombre,distancia,costo) VALUES (?,?,?)';
        $sentencia_agregar = $pdo->prepare($agregar);
        $sentencia_agregar->execute(array($name,$dist,$costo));

        header('loaction:mod-destinos.php');
    }

    //modificar
    if($_GET)
    {
        $id= $_GET['id'];

        $sele_u = 'SELECT * FROM destino WHERE destino=?';
        $consulta_u = $pdo->prepare($sele_u);
        $consulta_u->execute(array($id));
        $resultado_u = $consulta_u->fetch();

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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../css/style.css">
    <title>Reservaciones</title>
  </head>
  <body>
    <div calss="contenedor">
        <header>
            <div>
                <img src="../img/logo.png" alt="logo" id="logo">
            </div>
            <nav>
            <ul>
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="../horarios.php">Horarios</a></li>
                <li><a href="../administrar.php">Administrar</a></li>
            </ul>
            </nav>
        </header>
    </div>
    <article>
        <center><h1>Elegir el dato a modificar</h1></center>
        <br>
        <div class="container" mt-5>
            <div class="row">
                <div class="col-md-6">
                <?php foreach($resultado as $dato): ?>
                    <div class="alert alert-dark" role="alert">
                    <?php  echo $dato['nombre']; ?>
                        <a href="mod-destinos.php?id=<?php echo $dato['destino'] ?>" class="float-right">
                            <i class="far fa-edit"></i>
                        </a>
                        <a href="eliminar.php?id=<?php echo $dato['destino'] ?>" class="float-right mr-3">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </div>
                    <?php endforeach ?>
                </div>
                <div class="col-md-6">
                    <?php if(!$_GET): ?>
                        <h2>Agregar Destinos</h2>
                        <form action="" method="POST">
                            <input type="text" class="form-control" name="nombre" placeholder="Ingrese el nombre" required="">
                            <input type="text" class="form-control" name="dist" placeholder="Ingrese la distancia" required=""> 
                            <input type="text" class="form-control" name="costo" placeholder="Ingrese el costo" required=""> 
                            <button class="btn btn-primary mt-3">Agregar</button>
                        </form>
                    <?php endif ?>
                    <?php if($_GET): ?>
                        <h2>Modificar Destinos</h2>
                        <form action="editar.php" method="GET">
                            <label>Destino</label>
                            <input type="text" class="form-control" name="nombre" value="<?php echo $resultado_u['nombre']; ?>" required="">
                            <label>Distancia</label>
                            <input type="text" class="form-control" name="dist" value="<?php echo $resultado_u['distancia']; ?>"  required=""> 
                            <label>Costo</label>
                            <input type="text" class="form-control" name="costo" value="<?php echo $resultado_u['costo']; ?>"  required=""> 
                            <input type="hidden" name="id" value="<?php echo $resultado_u['destino']; ?>">
                            <button class="btn btn-primary mt-3">Modificar</button>
                        </form>
                    <?php endif ?>
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