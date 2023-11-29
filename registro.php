<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gold's Gym</title>
    <link rel="shortcut icon" href="media/img/gym.png" type="image/x-icon">
    <link rel="stylesheet" href="estilos.css">
</head>
<body class="register">
    
<div class="formRegister">
        <h1>Gold's Gym</h1>
        <form action="submitRegistro.php" method="post">
            <div class="registro">
                <input name="nombre" type="text" required>
                <label>Nombre</label>
            </div>

            <div class="registro">
                <input name="apellidos" type="text" required>
                <label>Apellidos</label>
            </div>

            <div class="registro">
                <input name="email" type="email" required>
                <label>Correo electronico</label>
            </div>

            <div class="registro">
                <input name="telefono" type="text" required>
                <label>Telefono</label>
            </div>

            <div class="registro">
                <input name="direccion" type="text" required>
                <label>Dirección</label>
            </div>

            <div class="registro">
                <input name="fechaNacimiento" type="date" required>
                <label>Fecha de nacimiento</label>
            </div>

            <div class="registroGen">
                <label>Genero</label>
                <input type="radio" name="genero" value="Masculino"> Masculino
                <input type="radio" name="genero" value="Femenino"> Femenino
                <input type="radio" name="genero" value="Otro"> Otro
            </div>

            <div class="registro">
                <input name="nombre_usuario" type="text" required>
                <label>Usuario</label>
            </div>

            <div class="registro">
                <input name="contraseña" type="password" required>
                <label>Contraseña</label>
            </div>

            <button class="btnregister">Registrarme</button>

            

        </form>


    </div>
    


</body>
</html>