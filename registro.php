<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
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
            <center><h1>Registro</h1></center>
            <form action="guardar.php" method="post" required="">
                <label>Nombre: </label><br>
                <input type="text" name="nombre" placeholder="Ingresa tu Nombre" required=""><br>
                <label>Dirección:</label><br>
                <input type="text" name="dir" placeholder="Ingresa tu Dirección" required=""><br>
                <label>Teléfono:</label><br>
                <input type="text" name="tel" placeholder="Ingresa tu Teléfono" required=""><br>
                <label>Correo:</label><br>
                <input type="text" name="correo" placeholder="Ingresa tu correo" required=""><br>
                <label>Contraseña:</label><br>
                <input type="password" name="contra" required=""><br>
                <label>Confirmar Contraseña:</label><br>
                <input type="password" name="contra2" required=""><br>
                <button type="submit">Registrarme</button>
            </form>
        </div>
    </section>
</body>
</html>