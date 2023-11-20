<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PowerPulse Gym</title>
    <link rel="shortcut icon" href="media/img/gym.png" type="image/x-icon">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    

    
    <div class="formulario">
        <h1>PowerPulse Gym</h1>
        <form action="respuesta.php" method="post">
            <div class="username">
                <input name="nombre_usuario" type="text" required>
                <label>Usuario</label>
            </div>

            <div class="username">
                <input name="contraseña" type="password" required>
                <label>Contraseña</label>
            </div>

            <button class="btn"> Iniciar sesión</button>

            <div class="registrarse">
                <a href="registro.php">Registrarme</a>
            </div>

        </form>


    </div>

</body>
</html>