<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio_Sesion</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div>
            <img src="img/logo.png" alt="logo" id="logo">
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="horarios.php">Horarios</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <div>
            <center><h1>Iniciar Sesión</h1></center>
            <form action="validar.php" method="post">
                <label>Correo: </label><br>
                <input type="text" name="email" placeholder="Ingresa tu correo"><br>
                <label>Contraseña:</label><br>
                <input type="password" name="pass">
                <button type="submit">Iniciar Sesión</button>
                <a class="boton" href="registro.php">Registrarme</a><br>
            </form>
        </div>
    </section>
</body>
</html>