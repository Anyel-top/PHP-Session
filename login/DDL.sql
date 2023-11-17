create database Login;
use login;
CREATE TABLE usuario(
	IDUsuario int auto_increment primary key, 
    usuario varchar(25),
    contra varchar(25),
    ciudad varchar(25)
);

