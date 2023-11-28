drop schema if exists gimnasio;
create schema  if not exists gimnasio default  character set utf8 collate  utf8_spanish2_ci;
use gimnasio; 

create table clientes(
id_cliente int(9) not null auto_increment primary key,
apellidos varchar(100),
nombre varchar(50) not null,
direccion text not null,
telefono varchar(10) not null,
email varchar(50) not null,
fecha_nacimiento date not null,
genero ENUM('Masculino', 'Femenino', 'Otro') not null,
nombre_usuario varchar(50) not null,
contraseña varchar(15) not null,
fecha_registro datetime not null default current_timestamp
);