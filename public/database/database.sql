DROP DATABASE IF EXISTS proyect;

CREATE DATABASE proyect;
use proyect;


CREATE TABLE alumno(idalumno int auto_increment not null primary key,
 					nombre varchar(255) not null,
 					año int not null,
 					fechaR varchar(255) not null);
 					
insert into alumno values(0,'Pedro', 18, now());
insert into alumno values(0,'Pablo', 28, now());
insert into alumno values(0,'enoc', 26, now());
insert into alumno values(0,'edgar', 42, now());
insert into alumno values(0,'amanda', 70, now());



CREATE TABLE calificaciones(idcalificacion int auto_increment not null primary key,
 					materia varchar(255) not null,
 					cal1 int not null,
 					cal2 int not null,
 					cal3 int not null);

insert into calificaciones values(0,'matematicas', 8, 9, 10);
insert into calificaciones values(0,'desarrollo web', 8, 9, 10);
insert into calificaciones values(0,'progrmacion', 10, 9, 10);
insert into calificaciones values(0,'seguridad', 9, 9, 10);
insert into calificaciones values(0,'base de datos', 10, 9, 10);