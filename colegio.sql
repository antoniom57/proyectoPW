drop schema if exists colegio;
create schema  if not exists colegio default  character set utf8 collate  utf8_spanish2_ci;
use colegio; 

create table alumno(
numero int(9) not null auto_increment primary key,
clave_alu varchar(9) not null,
ap_paterno varchar(50) not null,
ap_materno varchar(50) not null,
nombre varchar(50) not null,
curp varchar(18) not null,
direccion text not null,
telefono varchar(10) not null,
email varchar(50) not null,
nombre_usuario varchar(50) not null,
contraseña varchar(15) not null,
fecha_registro datetime not null default current_timestamp
);
