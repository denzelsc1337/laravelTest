create database almacen;
use almacen;
DROP TABLE IF EXISTS `categorias`;

create table `categorias`(
 `id` int not null auto_increment,
 `nombre` varchar(100) not null,
 primary key (idcat)
);

DROP TABLE IF EXISTS `productos`;

create table `productos`(
`id` int not null auto_increment,
`idcate` int(10),
`nombreprod` varchar(100)not null,
primary key(idprod),
FOREIGN KEY (`idcate`) REFERENCES `categorias` (`id`)
);

insert into categorias (nombre) values ("test");
select * from categorias ;

insert into productos (idcate, nombreprod) values (1, "lejia");

select * from productos ;