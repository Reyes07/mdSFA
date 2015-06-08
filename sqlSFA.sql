create database sfa;
	use sfa;
/* tablas  */
create table estatus(
status char(1) unique primary key ,
descripcion  varchar(50) not null
)ENGINE Innodb;

create table tipoUsuario(Id_tipoU int(1) primary key auto_increment,
    descripcion varchar(50),status char(1) not null default 'A')ENGINE Innodb;

create table usuario(Id_usuario int(1) primary key auto_increment,Id_tipoU char(1)
,nickname varchar (50),contrasenia varchar(30),status char(1) not null default 'A')ENGINE Innodb;

create table DatosUsuario(Id_datosU int(1) primary key auto_increment,nombre varchar(200),apPat varchar(100)
,apMat varchar(100),email varchar(50),Id_usuario int,status char(1) not null default 'A')ENGINE Innodb;


create table cultivo(Id_cultivo int(1) primary key auto_increment,nombre varchar(100),direccion varchar (50),HR int(1),pre_pluvial float(2),
tempMax float(2),tempMin float(2),tempRecomendada float(2),status char(1) not null default 'A')ENGINE Innodb;

create table zona(Id_zona int(1) primary key auto_increment,nombre varchar(100),status char(1) not null default 'A')Engine Innodb;	


create table DatosZona(Id_zona int(1) primary key auto_increment,longitud float(2),Latitud float(2),
	Altitud float(2),PB float(2),Rad_solar int(1),HR int(1),status char(1))ENGINE Innodb;

create table temperatura(Id_temp int(1) primary key auto_increment,tempMax float(2),tempMin float(2),fecha date,Id_zona int,status varchar(1) not null default 'A')ENGINE Innodb;


/* llaves foraneas */
alter table tipoUsuario add constraint foreign key(status)references estatus(status); 
alter table DatosUsuario add constraint foreign key (Id_usuario)references usuario(Id_usuario);
alter table DatosUsuario add constraint foreign key (status) references estatus(status);
alter table usuario add constraint foreign key(status)references estatus(status); 
alter table cultivo add constraint foreign key(status)references estatus(status); 
alter table zona add constraint foreign key(status)references estatus(status); 
alter table DatosZona add constraint foreign key(Id_zona)references zona(Id_zona);
alter table DatosZona add constraint foreign key(status)references estatus(status);
alter table temperatura add constraint foreign key(status)references estatus(status); 
alter table temperatura add constraint foreign key(Id_zona)references zona(Id_zona); 

/* Procedimientos almacenados*/

delimiter $$
 
 create procedure insertar_estatus(sta char(1),
descrip varchar(50))
 begin
		insert into estatus(status,descripcion)values(sta,descrip);
 end;
 
 $$
 
 /* inserciones de la tabla estatus*/
call insertar_estatus('A','Activo');
call insertar_estatus('I','Inactivo');
call insertar_estatus('E','Espera');
$$

 
/* procedimiento almacenado para insertar tipo usuario*/
delimiter ##

create procedure insertar_tipoU(Id_tipoU char(1),
    des varchar(50))
begin
	insert into tipoUsuario(Id_tipoU,descripcion)values(Id_tipoU,des);
end;

##
/* llamamos al procedimiento almacenado de insertar tipo usuario*/
call insertar_tipoU('A','administrador');
call insertar_tipoU('C','cliente');
$$

/*Procedimiento almacenado para insertar usuario*/

delimiter ##
 create procedure insertar_usuario(Id_tipoU char(1)
,nickname varchar (50),contrasenia varchar(30))
 begin
 	insert into usuario(Id_tipoU,nickname,contrasenia)
 		values(Id_tipoU,nickname,contrasenia);
 end;
##

call insertar_usuario('A','Luisinio','yesi');
call insertar_usuario('C','yesi','luis');
call insertar_usuario('A','Reyes','Reye$');

delimiter ##
 create procedure eliminar_usuario(in Id_usu int)
    begin
        update usuario set status='I' where Id_usuario=Id_usu;
    end;
##
    call eliminar_usuario(1);
##

/*procedimiento almacenado para insertar datosUsuario*/
delimiter ##
create procedure insertar_DatosUsuario(nom varchar(200),apPat varchar(100)
,apMat varchar(100),email varchar(50),Id_usu int)
begin
        INSERT INTO datosusuario(nombre,apPat,apMat,email,Id_usuario) VALUES
         (nom,apPat,apMat,email,Id_usu);
end;
##

call insertar_DatosUsuario('Luis','Beristain','Cruz','luis@hotmail.com',1);
call insertar_DatosUsuario('yesenia','Flores','Martinez','yesi@hotmail.com',2);

$$

/* procedimiento almacenado para insertar cultivo */
delimiter ##
  create procedure insertar_cultivo(nombre varchar(100),dir varchar (50),HR int(1),pre_plu float(2),
tempMax float(2),tempMin float(2),tempRe float(2))
    begin
       insert into cultivo(nombre,direccion,HR,pre_pluvial,
tempMax,tempMin,tempRecomendada)values(nombre,dir,HR,pre_plu,
tempMax,tempMin,tempRe);
    end;
##

call insertar_cultivo('Chayote','imagenes/chayote.jpg',23,'23.5','38','8','31');
call insertar_cultivo('Elote','imagenes/elote.jpg',34,'54.5','55','7','98');
$$

 delimiter ##
    
    create procedure eliminar_cultivo(in Id_cult int)
    begin
        update cultivo set status='I' where Id_cultivo=Id_cult;
    end;
    
    call eliminar_cultivo(1);
##
/* Procedimiento almacenado para actualizar cultivo*/
delimiter ##
create procedure actualizarCultivo (in Id_cul int ,in nom varchar(100) ,in dir varchar (50) , in HR int(1),in pre_plu float(2),in tempMax float(2),in tempMin float(2),in tempRe float(2))
begin  start transaction;
update cultivo set Id_cultivo=Id_cul,nombre=nom,direccion=dir,HR=HR,
    pre_pluvial=pre_plu,tempMax=tempMax,tempMin=tempMin,temprecomendada=tempRe where Id_cultivo=Id_cul;
commit;
End; ##

call actualizarCultivo(3,'Cebolla Morada','imagenes/CM.jpg',12,23.2,38,8,30);







/*Procedimiento almacenado para insertar zona*/
delimiter $$
 create procedure insertar_zona(nom varchar(100))
    begin
        insert into zona(nombre)values(nom);
    end;
$$

call insertar_zona('Campo Grande ixtac.');
call insertar_zona('Tuxpanguillo ixtac.');
call insertar_zona('Nogales ver.');
 /*  procedimiento almacenado para insertar datos zona */
delimiter ##
  create procedure insertar_DatosZona(lon float(2),Lat float(2),
    Alt float(2),PB float(2),Rad_solar int(1),HR int(1))
    begin
        insert into DatosZona(longitud,Latitud,Altitud,PB,Rad_solar,HR)values(lon,Lat,
    Alt,PB,Rad_solar,HR);
    end;
##

call insertar_DatosZona('123.45','678.87','345.67','45',78,87);

/*Procedimiento almacenado para insertar Temperatura*/
delimiter ##
create procedure insertar_Temperatura(tempMax float(2),tempMin float(2),fecha date)
	begin
		insert into temperatura(tempMax,tempMin,fecha)values(tempMax,tempMin,fecha);
	end;

##

call insertar_Temperatura('32.1','8.3','2015-02-09',1);
call insertar_Temperatura('32.1','8.3','2015-02-09');
##


CREATE DEFINER=`root`@`localhost` PROCEDURE `borrar_zona`(
    idzona int
    )
begin
    update zona set  status="i" where id_zona=idzona;
    end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertar_datoszona`(
   
    longi float,
    lat float,
    alt float,
    p float,
    radsolar int,
    h int
      
    )
begin
    insert into datoszona(`Id_zona`,`longitud`,`Latitud`,`Altitud`,`PB`,`Rad_solar`,`HR`)
    values(longi,lat,alt,p,radsolar,h);
    end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertar_estatus`(sta char(1),descrip varchar(500))
begin
		insert into estatus(status,descripcion)values(sta,descrip);
 end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertar_tipoU`(Id_tu varchar(1),des varchar(500))
begin
	insert into tipoUsuario(Id_tipoU,descripcion )values(Id_tu,des);
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertar_zona`(
nombr varchar(100)
)
begin
	insert into zona(nombre )values(nombr);
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `restaurar_cultivo`(
    idcultivo int
    )
begin
    update cultivo set  status="a" where id_cultivo=idcultivo;
    end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `restaurar_datoszona`(
    idcultivo int
    )
begin
    update cultivo set  status="a" where id_cultivo=idcultivo;
    end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `restaurar_zona`(
    idzona int
    )
begin
    update zona set  status="a" where id_zona=idzona;
    end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_cultivo`(
    idcultivo int,
    nom varchar(100),
    hr int(4),
    prepluvial float,
    tempmaxima float,
    tempminima float,
    temprecomendada float,
    statu char
    )
begin
    update cultivo set  nombre=nom, 
    HR=hr, 
    pre_pluvial=prepluvial,
    tempMax=tempmaxima,
    temMin=temperaturaminima,
    tempRecomendada=temprecomendada,
    status=statu where id_cultivo=idcultivo;
    end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_datoszona`(
    idzona int,
   longi float,
   lat float,
    alt float,
    p float,
    radsolar int,
    h int,
    stat char(1)
    )
begin
update datoszona set `longitud`=longi,`Latitud`=lat, `Altitud`=alt, `PB`=p, `Rad_solar`=radsolar, `HR`=h, `status`=stat;
    end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_zona`(
    idzona int,
    nombr varchar(100),
    stat char(1)
    )
begin
    update zona set nombre=nombr, status=stat where id_zona=idzona;
    end$$

DELIMITER ;
