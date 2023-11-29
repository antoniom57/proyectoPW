<?php

include "conexion.php";
mysqli_set_charset($conexion,'utf8');

$buscarUsuario = "SELECT * FROM clientes where nombre_usuario = '$_POST[nombre_usuario]'";

$result = $conexion -> query($buscarUsuario);
$count = mysqli_num_rows($result);

if($count ==1 ){
    echo'El nombre se usuario ya a sido ocupado';
    header('Location: ./registro.php');
    
}else{
    mysqli_query($conexion, "INSERT INTO clientes (apellidos, nombre, direccion, telefono, email, fecha_nacimiento, genero, nombre_usuario, contraseña)
    VALUES('$_POST[apellidos]', '$_POST[nombre]', '$_POST[direccion]', '$_POST[telefono]', '$_POST[email]', '$_POST[fechaNacimiento]', '$_POST[genero]', '$_POST[nombre_usuario]', '$_POST[contraseña]')");

header('Location: index.php');


}



?>