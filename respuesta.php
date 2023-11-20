<?php
session_start();
include "conexion.php";
$usuario = $_POST['nombre_usuario'];
$password = $_POST['contraseña'];

$q = "SELECT COUNT(*) AS contar FROM clientes WHERE nombre_usuario= '$usuario' AND contraseña = '$password'";

$consulta = mysqli_query($conexion,$q);

$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
    $_SESSION['usermane']=$usuario;
    echo "Ingresaste";
    header("location: ./dashboard.php");
}else{

        header("location: ./index.php");

echo "error";
   
}

?>