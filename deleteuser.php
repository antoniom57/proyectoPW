<?php
require "conexion.php";
mysqli_set_charset($conexion, 'utf8');

// Verificar si se envió un nombre de usuario
if (isset($_POST["nombre_usuario"])) {
    // Obtener el nombre de usuario de forma segura
    $usuario = mysqli_real_escape_string($conexion, $_POST["nombre_usuario"]);

    // Consulta preparada para evitar la inyección SQL
    $consulta = "DELETE FROM clientes WHERE nombre_usuario = ?";
    
    // Preparar la consulta
    $stmt = mysqli_prepare($conexion, $consulta);

    // Vincular parámetros
    mysqli_stmt_bind_param($stmt, "s", $usuario);

    // Ejecutar la consulta
    mysqli_stmt_execute($stmt);

    // Verificar si la consulta fue exitosa
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        echo "Registro eliminado correctamente.";
    } else {
        echo "No se encontró el registro o hubo un error en la eliminación.";
    }

    // Cerrar la consulta preparada
    mysqli_stmt_close($stmt);
} else {
    echo "No se proporcionó un nombre de usuario.";
}

// Cerrar la conexión
mysqli_close($conexion);

// Redirigir a la página de inicio
header('Location: index.php');
?>
