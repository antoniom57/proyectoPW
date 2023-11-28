<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gold's Gym</title>
    <link rel="shortcut icon" href="media/img/gym.png" type="image/x-icon">
    <link rel="stylesheet" href="estilos.css">
</head>
<body class="deleteuser">

    <div class="eliminar">
        <h1>Adios :(</h1>
        <form action="deleteuser.php" method="post">
            <div class="userdelete">
                <input name="nombre_usuario" type="text" required>
                <label>Usuario</label>
            </div>
            
            <button class="btndelete">Eliminar usuario</button>
            
            
            
        </form>
    </div>

</body>
</html>