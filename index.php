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
                                    echo 'Sesión no Iniciada';
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
            <br>
            <center><h1>Central de Transportes Mercado de los Ancianos</h1></center>
            <center><img class="img" src="img/mapa.jpg" alt="mapa"></center>
            <a href="https://www.google.com/maps/place/Central+De+Transportes+Mercado+De+Los+Ancianos/@16.7438316,-93.1059071,18z/data=!4m5!3m4!1s0x85ecd87cef54de77:0x9402246360defb70!8m2!3d16.743693!4d-93.1061563">Ver el mapa completo</a>
            <br><br>
            <p>
                <b>Dirección:</b> 9a Poniente Norte 165 SN Maldonado
                <br><br>
                <b>Teléfono:</b> (961)612-8063
                <br><br>
                <b>Referencias: </b> Se encuentra frente al mercado de Ancianos
                <br><br>
            </p>
        </article>
        <footer>
            <tr>
                <td width="20%"><img src="img/logo_unach.png" alt="logo_unach"></td>
            </tr>
        </footer>
    </div>

</body>
</html>