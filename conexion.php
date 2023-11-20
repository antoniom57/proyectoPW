<?php

$host_db="localhost:3306";
$user_db="root";
$pass_db="";
$db_name="gimnasio";

$conexion=new mysqli($host_db,$user_db,$pass_db,$db_name);

if ($conexion->connect_error) {
    echo"<h1 style='color: #373737; text-align: center;'>Error en la conexion</h1>";
} else {
    echo"<h1 style='color: #C0B283; text-align: center;'>Hola, tu conexión fue exitosa.</h1>";
}


?>