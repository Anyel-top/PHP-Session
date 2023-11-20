CREATE TABLE usuarios(
    IDUsuario int auto_increment primary key, 
    usuario varchar(25),
    contra varchar(25),
    ciudad varchar(25), 
    nombre varchar(25),
    telefono varchar(10),
    cedula varchar(10),
    foto_path varchar(255)
);