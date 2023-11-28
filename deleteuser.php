<?php
require "conexion.php";
mysqli_set_charset($conexion,'utf8');
$usuario = $_POST["nombre_usuario"];
$consulta="delete from clientes where nombre_usuario='$usuario'";
mysqli_query($conexion, $consulta);
mysqli_close($conexion);
header('Location: index.php');
?>