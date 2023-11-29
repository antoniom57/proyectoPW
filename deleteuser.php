<?php
require "conexion.php";
$usuario = $_POST['nombre_usuario'];
$password = $_POST['contraseña'];
$q = "SELECT COUNT(*) AS contar FROM clientes WHERE nombre_usuario= '$usuario' AND contraseña = '$password'";
$consulta = mysqli_query($conexion,$q);
$array = mysqli_fetch_array($consulta);
if($array['contar']>0){
    $delete="delete from clientes where nombre_usuario='$usuario'";
    mysqli_query($conexion, $delete);
    mysqli_close($conexion);
    header('Location: index.php');
}else{
    header("location: ./eliminar.php");
}
?>