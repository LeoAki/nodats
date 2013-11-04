-- phpMyAdmin SQL Dump
-- version 4.0.8
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 04-11-2013 a las 15:54:09
-- Versión del servidor: 5.5.34
-- Versión de PHP: 5.5.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `urp881`
--
CREATE DATABASE urp881;

USE urp881;

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`urp881`@`localhost` PROCEDURE `Listar_ALumnos_Seccion`(
in aseccion int(5)
)
SELECT ase.nroorden, ae.paterno, ae.materno, ae.nombres
FROM Alumno_Seccion ase
INNER JOIN Alumno ae ON ase.idalumno = ae.codigo
WHERE ase.idseccion =aseccion order by ase.nroorden$$

CREATE DEFINER=`urp881`@`localhost` PROCEDURE `Sp_1alumnoregistro`(
in aidalumnoregistro bigint(11),
in aidregistro int(11),
in aidalumnoseccion int(11),
in asituacion varchar(250),
in apromedio1 decimal(10,2),
in apromedio2 decimal(10,2),
in apromedio3 decimal(10,2),
in apromedio4 decimal(10,2),
in apromedio5 decimal(10,2),
in apb decimal(10,2),
in ap11 decimal(10,2),in ap12 decimal(10,2),in ap13 decimal(10,2),in ap14 decimal(10,2),in ap15 decimal(10,2),
in ap16 decimal(10,2),in ap17 decimal(10,2),in ap18 decimal(10,2),in ap19 decimal(10,2),in ap110 decimal(10,2),
in ap21 decimal(10,2),in ap22 decimal(10,2),in ap23 decimal(10,2),in ap24 decimal(10,2),in ap25 decimal(10,2),
in ap26 decimal(10,2),in ap27 decimal(10,2),in ap28 decimal(10,2),in ap29 decimal(10,2),in ap210 decimal(10,2),
in ap31 decimal(10,2),in ap32 decimal(10,2),in ap33 decimal(10,2),in ap34 decimal(10,2),in ap35 decimal(10,2),
in ap36 decimal(10,2),in ap37 decimal(10,2),in ap38 decimal(10,2),in ap39 decimal(10,2),in ap310 decimal(10,2),
in ap41 decimal(10,2),in ap42 decimal(10,2),in ap43 decimal(10,2),in ap44 decimal(10,2),in ap45 decimal(10,2),
in ap46 decimal(10,2),in ap47 decimal(10,2),in ap48 decimal(10,2),in ap49 decimal(10,2),in ap410 decimal(10,2),
in ap51 decimal(10,2),in ap52 decimal(10,2),in ap53 decimal(10,2),in ap54 decimal(10,2),in ap55 decimal(10,2),
in ap56 decimal(10,2),in ap57 decimal(10,2),in ap58 decimal(10,2),in ap59 decimal(10,2),in ap510 decimal(10,2)
)
if exists(select * from 1Alumno_Registro where idalumnoregistro=aidalumnoregistro) then 
	update 1Alumno_Registro
	set	
	idalumnoregistro=aidalumnoregistro,
	idregistro=aidregistro,
	idalumnoseccion=aidalumnoseccion,
	situacion=asituacion,
	1promedio1=apromedio1,
	1promedio2=apromedio2,
	1promedio3=apromedio3,
	1promedio4=apromedio4,
	1promedio5=apromedio5,
	1pb=apb,
	
	1p11=ap11,1p12=ap12,1p13=ap13,1p14=ap14,1p15=ap15,
	1p16=ap16,1p17=ap17,1p18=ap18,1p19=ap19,1p110=ap110,
	
	1p21=ap21,1p22=ap22,1p23=ap23,1p24=ap24,1p25=ap25,
	1p26=ap26,1p27=ap27,1p28=ap28,1p29=ap29,1p210=ap210,
	
	1p31=ap31,1p32=ap32,1p33=ap33,1p34=ap34,1p35=ap35,
	1p36=ap36,1p37=ap37,1p38=ap38,1p39=ap39,1p310=ap310,

	1p41=ap41,1p42=ap42,1p43=ap43,1p44=ap44,1p45=ap45,
	1p46=ap46,1p47=ap47,1p48=ap48,1p49=ap49,1p410=ap410,
	
	1p51=ap51,1p52=ap52,1p53=ap53,1p54=ap54,1p55=ap55,
	1p56=ap56,1p57=ap57,1p58=ap58,1p59=ap59,1p510=ap510
    
    where 
    idalumnoregistro=aidalumnoregistro;
else
	insert into 1Alumno_Registro
	values
	(
	aidalumnoregistro,aidregistro,aidalumnoseccion,asituacion,apromedio1,apromedio2,apromedio3,apromedio4,apromedio5,apb,
	ap11,ap12,ap13,ap14,ap15,ap16,ap17,ap18,ap19,ap110,
	ap21,ap22,ap23,ap24,ap25,ap26,ap27,ap28,ap29,ap210,
	ap31,ap32,ap33,ap34,ap35,ap36,ap37,ap38,ap39,ap310,
	ap41,ap42,ap43,ap44,ap45,ap46,ap47,ap48,ap49,ap410,
	ap51,ap52,ap53,ap54,ap55,ap56,ap57,ap18,ap59,ap510
	);
end if$$

CREATE DEFINER=`urp881`@`localhost` PROCEDURE `Sp_2alumnoregistro`(
in aidalumnoregistro bigint(11),
in aidregistro int(11),
in aidalumnoseccion int(11),
in asituacion varchar(250),
in apromedio1 decimal(10,2),
in apromedio2 decimal(10,2),
in apromedio3 decimal(10,2),
in apromedio4 decimal(10,2),
in apromedio5 decimal(10,2),
in apb decimal(10,2),
in ap11 decimal(10,2),in ap12 decimal(10,2),in ap13 decimal(10,2),in ap14 decimal(10,2),in ap15 decimal(10,2),
in ap16 decimal(10,2),in ap17 decimal(10,2),in ap18 decimal(10,2),in ap19 decimal(10,2),in ap110 decimal(10,2),
in ap111 decimal(10,2),in ap112 decimal(10,2),in ap113 decimal(10,2),
in ap21 decimal(10,2),in ap22 decimal(10,2),in ap23 decimal(10,2),in ap24 decimal(10,2),in ap25 decimal(10,2),
in ap26 decimal(10,2),in ap27 decimal(10,2),in ap28 decimal(10,2),in ap29 decimal(10,2),in ap210 decimal(10,2),
in ap31 decimal(10,2),in ap32 decimal(10,2),in ap33 decimal(10,2),in ap34 decimal(10,2),in ap35 decimal(10,2),
in ap36 decimal(10,2),in ap37 decimal(10,2),in ap38 decimal(10,2),in ap39 decimal(10,2),in ap310 decimal(10,2),
in ap41 decimal(10,2),in ap42 decimal(10,2),in ap43 decimal(10,2),in ap44 decimal(10,2),in ap45 decimal(10,2),
in ap46 decimal(10,2),in ap47 decimal(10,2),in ap48 decimal(10,2),in ap49 decimal(10,2),in ap410 decimal(10,2),
in ap51 decimal(10,2),in ap52 decimal(10,2),in ap53 decimal(10,2),in ap54 decimal(10,2),in ap55 decimal(10,2),
in ap56 decimal(10,2),in ap57 decimal(10,2),in ap58 decimal(10,2),in ap59 decimal(10,2),in ap510 decimal(10,2)
)
if exists(select * from 2Alumno_Registro where idalumnoregistro=aidalumnoregistro) then 
	update 2Alumno_Registro
	set	
	idalumnoregistro=aidalumnoregistro,
	idregistro=aidregistro,
	idalumnoseccion=aidalumnoseccion,
	situacion=asituacion,
	2promedio1=apromedio1,
	2promedio2=apromedio2,
	2promedio3=apromedio3,
	2promedio4=apromedio4,
	2promedio5=apromedio5,
	2pb=apb,
	
	2p11=ap11,2p12=ap12,2p13=ap13,2p14=ap14,2p15=ap15,
	2p16=ap16,2p17=ap17,2p18=ap18,2p19=ap19,2p110=ap110,
        2p111=ap111,2p112=ap112,2p113=ap113,
	
	2p21=ap21,2p22=ap22,2p23=ap23,2p24=ap24,2p25=ap25,
	2p26=ap26,2p27=ap27,2p28=ap28,2p29=ap29,2p210=ap210,
	
	2p31=ap31,2p32=ap32,2p33=ap33,2p34=ap34,2p35=ap35,
	2p36=ap36,2p37=ap37,2p38=ap38,2p39=ap39,2p310=ap310,

	2p41=ap41,2p42=ap42,2p43=ap43,2p44=ap44,2p45=ap45,
	2p46=ap46,2p47=ap47,2p48=ap48,2p49=ap49,2p410=ap410,
	
	2p51=ap51,2p52=ap52,2p53=ap53,2p54=ap54,2p55=ap55,
	2p56=ap56,2p57=ap57,2p58=ap58,2p59=ap59,2p510=ap510
    
    where 
    idalumnoregistro=aidalumnoregistro;
else
	insert into 2Alumno_Registro
	values
	(
	aidalumnoregistro,aidregistro,aidalumnoseccion,asituacion,apromedio1,apromedio2,apromedio3,apromedio4,apromedio5,apb,
	ap11,ap12,ap13,ap14,ap15,ap16,ap17,ap18,ap19,ap110,ap111,ap112,ap113,
	ap21,ap22,ap23,ap24,ap25,ap26,ap27,ap28,ap29,ap210,
	ap31,ap32,ap33,ap34,ap35,ap36,ap37,ap38,ap39,ap310,
	ap41,ap42,ap43,ap44,ap45,ap46,ap47,ap48,ap49,ap410,
	ap51,ap52,ap53,ap54,ap55,ap56,ap57,ap18,ap59,ap510
	);
end if$$

CREATE DEFINER=`urp881`@`localhost` PROCEDURE `Sp_3alumnoregistro`(
in aidalumnoregistro bigint(11),
in aidregistro int(11),
in aidalumnoseccion int(11),
in asituacion varchar(250),
in apromedio1 decimal(10,2),
in apromedio2 decimal(10,2),
in apromedio3 decimal(10,2),
in apromedio4 decimal(10,2),
in apromedio5 decimal(10,2),
in apb decimal(10,2),
in ap11 decimal(10,2),in ap12 decimal(10,2),in ap13 decimal(10,2),in ap14 decimal(10,2),in ap15 decimal(10,2),
in ap16 decimal(10,2),in ap17 decimal(10,2),in ap18 decimal(10,2),in ap19 decimal(10,2),in ap110 decimal(10,2),
in ap111 decimal(10,2),in ap112 decimal(10,2),in ap113 decimal(10,2),
in ap21 decimal(10,2),in ap22 decimal(10,2),in ap23 decimal(10,2),in ap24 decimal(10,2),in ap25 decimal(10,2),
in ap26 decimal(10,2),in ap27 decimal(10,2),in ap28 decimal(10,2),in ap29 decimal(10,2),in ap210 decimal(10,2),
in ap211 decimal(10,2),in ap212 decimal(10,2),
in ap31 decimal(10,2),in ap32 decimal(10,2),in ap33 decimal(10,2),in ap34 decimal(10,2),in ap35 decimal(10,2),
in ap36 decimal(10,2),in ap37 decimal(10,2),in ap38 decimal(10,2),in ap39 decimal(10,2),in ap310 decimal(10,2),
in ap311 decimal(10,2),in ap312 decimal(10,2),in ap313 decimal(10,2),
in ap41 decimal(10,2),in ap42 decimal(10,2),in ap43 decimal(10,2),in ap44 decimal(10,2),in ap45 decimal(10,2),
in ap46 decimal(10,2),in ap47 decimal(10,2),in ap48 decimal(10,2),in ap49 decimal(10,2),in ap410 decimal(10,2),
in ap411 decimal(10,2),in ap412 decimal(10,2),
in ap51 decimal(10,2),in ap52 decimal(10,2),in ap53 decimal(10,2),in ap54 decimal(10,2),in ap55 decimal(10,2),
in ap56 decimal(10,2),in ap57 decimal(10,2),in ap58 decimal(10,2),in ap59 decimal(10,2),in ap510 decimal(10,2),
in ap511 decimal(10,2),in ap512 decimal(10,2)
)
if exists(select * from 3Alumno_Registro where idalumnoregistro=aidalumnoregistro) then 
   update 3Alumno_Registro
   set   
   idalumnoregistro=aidalumnoregistro,
   idregistro=aidregistro,
   idalumnoseccion=aidalumnoseccion,
   situacion=asituacion,
   3promedio1=apromedio1,
   3promedio2=apromedio2,
   3promedio3=apromedio3,
   3promedio4=apromedio4,
   3promedio5=apromedio5,
   3pb=apb,
   
   3p11=ap11,3p12=ap12,3p13=ap13,3p14=ap14,3p15=ap15,
   3p16=ap16,3p17=ap17,3p18=ap18,3p19=ap19,3p110=ap110,3p111=ap111,3p112=ap112,3p113=ap113,
   
   3p21=ap21,3p22=ap22,3p23=ap23,3p24=ap24,3p25=ap25,
   3p26=ap26,3p27=ap27,3p28=ap28,3p29=ap29,3p210=ap210,3p211=ap211,3p212=ap212,
   
   3p31=ap31,3p32=ap32,3p33=ap33,3p34=ap34,3p35=ap35,
   3p36=ap36,3p37=ap37,3p38=ap38,3p39=ap39,3p310=ap310,3p311=ap311,3p312=ap312,3p313=ap313,

   3p41=ap41,3p42=ap42,3p43=ap43,3p44=ap44,3p45=ap45,
   3p46=ap46,3p47=ap47,3p48=ap48,3p49=ap49,3p410=ap410,3p411=ap411,3p412=ap412,
   
   3p51=ap51,3p52=ap52,3p53=ap53,3p54=ap54,3p55=ap55,
   3p56=ap56,3p57=ap57,3p58=ap58,3p59=ap59,3p510=ap510,3p511=ap511,3p512=ap512
    
    where 
    idalumnoregistro=aidalumnoregistro;
else
   insert into 3Alumno_Registro
   values
   (
   aidalumnoregistro,aidregistro,aidalumnoseccion,asituacion,apromedio1,apromedio2,apromedio3,apromedio4,apromedio5,apb,
   ap11,ap12,ap13,ap14,ap15,ap16,ap17,ap18,ap19,ap110,ap111,ap112,ap113,
   ap21,ap22,ap23,ap24,ap25,ap26,ap27,ap28,ap29,ap210,ap211,ap212,
   ap31,ap32,ap33,ap34,ap35,ap36,ap37,ap38,ap39,ap310,ap311,ap312,ap313,
   ap41,ap42,ap43,ap44,ap45,ap46,ap47,ap48,ap49,ap410,ap411,ap412,
   ap51,ap52,ap53,ap54,ap55,ap56,ap57,ap18,ap59,ap510,ap511,ap512
   );
end if$$

CREATE DEFINER=`urp881`@`localhost` PROCEDURE `Sp_alumno`(
in acodigo int(11),
in acod_seccion int(11),
in apaterno varchar(25),
in amaterno varchar(25),
in anombres varchar(20),
in anacionalidad varchar(25),
in asexo char(1),
in adni char(8),
in afechainscripcion date,
in amatriculante varchar(100),
in afechanacimiento date,
in adepartamento_nac varchar(25),
in aprovincia_nac varchar(25),
in adistrito_nac varchar(25),
in alocalidad_nac varchar(25),
in atipodeparto varchar(25),
in adescripcion_parto varchar(25),
in adepartamento varchar(25),
in aprovincia varchar(25),
in adistrito varchar(25),
in adomicilio varchar(25),
in aano_residencia char(4),
in acelular char(9),
in afijo varchar(9),
in arpm varchar(9),
in arpc varchar(9),
in aemail varchar(55),
in areligion varchar(50),
in aalergicomedicamento1 varchar(100),
in aalergicomedicamento2 varchar(100),
in aalergicomedicamento3 varchar(100),
in aalergicomedicamento4 varchar(100),
in aalergia_polvo_acaro boolean,
in aalergia_humedad_hongos boolean,
in atipo_sangre varchar(25),
in abecado boolean,
in atipo_beca varchar(15),
in aresolucion_beca varchar(50),
in acant_hermanos int(2),
in alugar_hermanos int(2),
in acolegioprocedente varchar(100)
)
if exists(select * from Alumno where codigo=acodigo) then 
	update Alumno
	set	
	cod_seccion=acod_seccion,
	paterno=apaterno,
	materno=amaterno,
	nombres=anombres,
	nacionalidad=anacionalidad,
	sexo=asexo,
	dni=adni,
	fechainscripcion=afechainscripcion,
	matriculante=amatriculante,
	fechanacimiento=afechanacimiento,
	departamento_nac=adepartamento_nac,
	provincia_nac=provincia_nac,
	distrito_nac=adistrito_nac,
	localidad_nac=alocalidad_nac,
	tipodeparto=atipodeparto,
	descripcion_parto=adescripcion_parto,
	departamento=adepartamento,
	provincia=aprovincia,
	distrito=adistrito,
	domicilio=adomicilio,
	ano_residencia=aano_residencia,
	celular=acelular,
	fijo=afijo,
	rpm=arpm,
	rpc=arpc,
	email=aemail,
	religion=areligion,
	alergicomedicamento1=aalergicomedicamento1,
	alergicomedicamento2=aalergicomedicamento2,
	alergicomedicamento3=aalergicomedicamento3,
	alergicomedicamento4=aalergicomedicamento4,
	alergia_polvo_acaro=aalergia_polvo_acaro,
	alergia_humedad_hongos=aalergia_humedad_hongos,
	tipo_sangre=atipo_sangre,
	becado=abecado,
	tipo_beca=atipo_beca,
	resolucion_beca=aresolucion_beca,
	cant_hermanos=acant_hermanos,
	lugar_hermanos=alugar_hermanos,
	colegioprocedente=acolegioprocedente
	where codigo=acodigo;
else
	insert into Alumno
	values
	(acodigo,acod_seccion,apaterno,amaterno,anombres,anacionalidad,asexo,adni,afechainscripcion,amatriculante,afechanacimiento,adepartamento_nac,
	aprovincia_nac,adistrito_nac,alocalidad_nac,atipodeparto,adescripcion_parto,adepartamento,aprovincia,adistrito,adomicilio,aano_residencia,
	acelular,afijo,arpm,arpc,aemail,areligion,aalergicomedicamento1,aalergicomedicamento2,aalergicomedicamento3,aalergicomedicamento4,
	aalergia_polvo_acaro,aalergia_humedad_hongos,atipo_sangre,abecado,atipo_beca,aresolucion_beca,acant_hermanos,alugar_hermanos,acolegioprocedente);
end if$$

CREATE DEFINER=`urp881`@`localhost` PROCEDURE `Sp_alumnoregistro`(
in aidalumnoregistro bigint(11),
in aidregistro int(11),
in aidalumnoseccion int(11),
in asituacion varchar(250),
in apromedio1 decimal(10,2),
in apromedio2 decimal(10,2),
in apromedio3 decimal(10,2),
in apromedio4 decimal(10,2),
in apromedio5 decimal(10,2),
in apb decimal(10,2),
in ap11 decimal(10,2),in ap12 decimal(10,2),in ap13 decimal(10,2),in ap14 decimal(10,2),in ap15 decimal(10,2),
in ap16 decimal(10,2),in ap17 decimal(10,2),in ap18 decimal(10,2),in ap19 decimal(10,2),in ap110 decimal(10,2),
in ap21 decimal(10,2),in ap22 decimal(10,2),in ap23 decimal(10,2),in ap24 decimal(10,2),in ap25 decimal(10,2),
in ap26 decimal(10,2),in ap27 decimal(10,2),in ap28 decimal(10,2),in ap29 decimal(10,2),in ap210 decimal(10,2),
in ap31 decimal(10,2),in ap32 decimal(10,2),in ap33 decimal(10,2),in ap34 decimal(10,2),in ap35 decimal(10,2),
in ap36 decimal(10,2),in ap37 decimal(10,2),in ap38 decimal(10,2),in ap39 decimal(10,2),in ap310 decimal(10,2),
in ap41 decimal(10,2),in ap42 decimal(10,2),in ap43 decimal(10,2),in ap44 decimal(10,2),in ap45 decimal(10,2),
in ap46 decimal(10,2),in ap47 decimal(10,2),in ap48 decimal(10,2),in ap49 decimal(10,2),in ap410 decimal(10,2),
in ap51 decimal(10,2),in ap52 decimal(10,2),in ap53 decimal(10,2),in ap54 decimal(10,2),in ap55 decimal(10,2),
in ap56 decimal(10,2),in ap57 decimal(10,2),in ap58 decimal(10,2),in ap59 decimal(10,2),in ap510 decimal(10,2)
)
if exists(select * from 1Alumno_Registro where idalumnoregistro=aidalumnoregistro) then 
	update 1Alumno_Registro
	set	
	idalumnoregistro=aidalumnoregistro,
	idregistro=aidregistro,
	idalumnoseccion=aidalumnoseccion,
	situacion=asituacion,
	1promedio1=apromedio1,
	1promedio2=apromedio2,
	1promedio3=apromedio3,
	1promedio4=apromedio4,
	1promedio5=apromedio5,
	1pb=apb,
	
	1p11=ap11,1p12=ap12,1p13=ap13,1p14=ap14,1p15=ap15,
	1p16=ap16,1p17=ap17,1p18=ap18,1p19=ap19,1p110=ap110,
	
	1p21=ap21,1p22=ap22,1p23=ap23,1p24=ap24,1p25=ap25,
	1p26=ap26,1p27=ap27,1p28=ap28,1p29=ap29,1p210=ap210,
	
	1p31=ap31,1p32=ap32,1p33=ap33,1p34=ap34,1p35=ap35,
	1p36=ap36,1p37=ap37,1p38=ap38,1p39=ap39,1p310=ap310,

	1p41=ap41,1p42=ap42,1p43=ap43,1p44=ap44,1p45=ap45,
	1p46=ap46,1p47=ap47,1p48=ap48,1p49=ap49,1p410=ap410,
	
	1p51=ap51,1p52=ap52,1p53=ap53,1p54=ap54,1p55=ap55,
	1p16=ap16,1p17=ap17,1p18=ap18,1p19=ap19,1p110=ap110
    
    where 
    idalumnoregistro=aidalumnoregistro;
else
	insert into Alumno_Registro
	values
	(
	aidalumnoregistro,aidregistro,aidalumnoseccion,asituacion,apromedio1,apromedio2,apromedio3,apromedio4,apromedio5,apb,
	ap11,ap12,ap13,ap14,ap15,ap16,ap17,ap18,ap19,ap110,
	ap21,ap22,ap23,ap24,ap25,ap26,ap27,ap28,ap29,ap210,
	ap31,ap32,ap33,ap34,ap35,ap36,ap37,ap38,ap39,ap310,
	ap41,ap42,ap43,ap44,ap45,ap46,ap47,ap48,ap49,ap410,
	ap51,ap52,ap53,ap54,ap55,ap56,ap57,ap18,ap59,ap510
	);
end if$$

CREATE DEFINER=`urp881`@`localhost` PROCEDURE `Sp_alumnoregistroinicial`(
in aidalumnoregistro varchar(25),
in aidregistro int(11),
in aidalumnoseccion int(11),
in asituacion varchar(250),
in apromedio1 varchar(2),
in apromedio2 varchar(2),
in apromedio3 varchar(2),
in apromedio4 varchar(2),
in apromedio5 varchar(2),
in apb varchar(2),
in ap11 varchar(2), in ap12 varchar(2), in ap13 varchar(2), in ap14 varchar(2), in ap15 varchar(2),
in ap16 varchar(2), in ap17 varchar(2), in ap18 varchar(2), in ap19 varchar(2), in ap110 varchar(2),
in ap111 varchar(2), in ap112 varchar(2), in ap113 varchar(2), in ap114 varchar(2),
in ap21 varchar(2), in ap22 varchar(2), in ap23 varchar(2), in ap24 varchar(2), in ap25 varchar(2),
in ap26 varchar(2), in ap27 varchar(2), in ap28 varchar(2), in ap29 varchar(2), in ap210 varchar(2),
in ap31 varchar(2), in ap32 varchar(2), in ap33 varchar(2), in ap34 varchar(2), in ap35 varchar(2),
in ap36 varchar(2), in ap37 varchar(2), in ap38 varchar(2), in ap39 varchar(2), in ap310 varchar(2),
in ap41 varchar(2), in ap42 varchar(2), in ap43 varchar(2), in ap44 varchar(2), in ap45 varchar(2),
in ap46 varchar(2), in ap47 varchar(2), in ap48 varchar(2), in ap49 varchar(2), in ap410 varchar(2),
in ap51 varchar(2), in ap52 varchar(2), in ap53 varchar(2), in ap54 varchar(2), in ap55 varchar(2),
in ap56 varchar(2), in ap57 varchar(2), in ap58 varchar(2), in ap59 varchar(2), in ap510 varchar(2)
)
if exists(select * from Alumno_Registroinicial where idalumnoregistro=aidalumnoregistro) then 
	update Alumno_Registroinicial
	set	
	idalumnoregistro=aidalumnoregistro,
	idregistro=aidregistro,
	idalumnoseccion=aidalumnoseccion,
	situacion=asituacion,
	promedio1=apromedio1,
	promedio2=apromedio2,
	promedio3=apromedio3,
	promedio4=apromedio4,
	promedio5=apromedio5,
	pb=apb,
	
	p11=ap11,p12=ap12,p13=ap13,p14=ap14,p15=ap15,
	p16=ap16,p17=ap17,p18=ap18,p19=ap19,p110=ap110,
	p111=ap111,p112=ap112,p113=ap113,p114=ap114,
	
	p21=ap21,p22=ap22,p23=ap23,p24=ap24,p25=ap25,
	p26=ap26,p27=ap27,p28=ap28,p29=ap29,p210=ap210,
	
	p31=ap31,p32=ap32,p33=ap33,p34=ap34,p35=ap35,
	p36=ap36,p37=ap37,p38=ap38,p39=ap39,p310=ap310,

	p41=ap41,p42=ap42,p43=ap43,p44=ap44,p45=ap45,
	p46=ap46,p47=ap47,p48=ap48,p49=ap49,p410=ap410,
	
	p51=ap51,p52=ap52,p53=ap53,p54=ap54,p55=ap55,
	p56=ap56,p57=ap57,p58=ap58,p59=ap59,p510=ap510
    
    where 
    idalumnoregistro=aidalumnoregistro;
else
	insert into Alumno_Registroinicial
	values
	(	aidalumnoregistro,aidregistro,aidalumnoseccion,asituacion,
        apromedio1,apromedio2,apromedio3,apromedio4,apromedio5,apb,
	ap11,ap12,ap13,ap14,ap15,ap16,ap17,ap18,ap19,ap110,ap111,ap112,ap113,ap114,
	ap21,ap22,ap23,ap24,ap25,ap26,ap27,ap28,ap29,ap210,
	ap31,ap32,ap33,ap34,ap35,ap36,ap37,ap38,ap39,ap310,
	ap41,ap42,ap43,ap44,ap45,ap46,ap47,ap48,ap49,ap410,
	ap51,ap52,ap53,ap54,ap55,ap56,ap57,ap58,ap59,ap510
	);
end if$$

CREATE DEFINER=`urp881`@`localhost` PROCEDURE `Sp_alumnoregistroinicial2`(
in aidalumnoregistro varchar(25),
in aidregistro int(11),
in aidalumnoseccion int(11),
in asituacion varchar(250),
in apromedio1 varchar(2),
in apromedio2 varchar(2),
in apromedio3 varchar(2),
in apromedio4 varchar(2),
in apromedio5 varchar(2),
in apb varchar(2),
in ap11 varchar(2), in ap12 varchar(2), in ap13 varchar(2), in ap14 varchar(2), in ap15 varchar(2),
in ap16 varchar(2), in ap17 varchar(2), in ap18 varchar(2), in ap19 varchar(2), in ap110 varchar(2),
in ap111 varchar(2), in ap112 varchar(2), in ap113 varchar(2), in ap114 varchar(2),
in ap21 varchar(2), in ap22 varchar(2), in ap23 varchar(2), in ap24 varchar(2), in ap25 varchar(2),
in ap26 varchar(2), in ap27 varchar(2), in ap28 varchar(2), in ap29 varchar(2), in ap210 varchar(2),
in ap31 varchar(2), in ap32 varchar(2), in ap33 varchar(2), in ap34 varchar(2), in ap35 varchar(2),
in ap36 varchar(2), in ap37 varchar(2), in ap38 varchar(2), in ap39 varchar(2), in ap310 varchar(2),
in ap41 varchar(2), in ap42 varchar(2), in ap43 varchar(2), in ap44 varchar(2), in ap45 varchar(2),
in ap46 varchar(2), in ap47 varchar(2), in ap48 varchar(2), in ap49 varchar(2), in ap410 varchar(2),
in ap51 varchar(2), in ap52 varchar(2), in ap53 varchar(2), in ap54 varchar(2), in ap55 varchar(2),
in ap56 varchar(2), in ap57 varchar(2), in ap58 varchar(2), in ap59 varchar(2), in ap510 varchar(2)
)
if exists(select * from Alumno_Registroinicial2 where idalumnoregistro=aidalumnoregistro) then 
	update Alumno_Registroinicial2
	set	
	idalumnoregistro=aidalumnoregistro,
	idregistro=aidregistro,
	idalumnoseccion=aidalumnoseccion,
	situacion=asituacion,
	promedio1=apromedio1,
	promedio2=apromedio2,
	promedio3=apromedio3,
	promedio4=apromedio4,
	promedio5=apromedio5,
	pb=apb,
	
	p11=ap11,p12=ap12,p13=ap13,p14=ap14,p15=ap15,
	p16=ap16,p17=ap17,p18=ap18,p19=ap19,p110=ap110,
	p111=ap111,p112=ap112,p113=ap113,p114=ap114,
	
	p21=ap21,p22=ap22,p23=ap23,p24=ap24,p25=ap25,
	p26=ap26,p27=ap27,p28=ap28,p29=ap29,p210=ap210,
	
	p31=ap31,p32=ap32,p33=ap33,p34=ap34,p35=ap35,
	p36=ap36,p37=ap37,p38=ap38,p39=ap39,p310=ap310,

	p41=ap41,p42=ap42,p43=ap43,p44=ap44,p45=ap45,
	p46=ap46,p47=ap47,p48=ap48,p49=ap49,p410=ap410,
	
	p51=ap51,p52=ap52,p53=ap53,p54=ap54,p55=ap55,
	p56=ap56,p57=ap57,p58=ap58,p59=ap59,p510=ap510
    
    where 
    idalumnoregistro=aidalumnoregistro;
else
	insert into Alumno_Registroinicial2
	values
	(	aidalumnoregistro,aidregistro,aidalumnoseccion,asituacion,
        apromedio1,apromedio2,apromedio3,apromedio4,apromedio5,apb,
	ap11,ap12,ap13,ap14,ap15,ap16,ap17,ap18,ap19,ap110,ap111,ap112,ap113,ap114,
	ap21,ap22,ap23,ap24,ap25,ap26,ap27,ap28,ap29,ap210,
	ap31,ap32,ap33,ap34,ap35,ap36,ap37,ap38,ap39,ap310,
	ap41,ap42,ap43,ap44,ap45,ap46,ap47,ap48,ap49,ap410,
	ap51,ap52,ap53,ap54,ap55,ap56,ap57,ap58,ap59,ap510
	);
end if$$

CREATE DEFINER=`urp881`@`localhost` PROCEDURE `Sp_alumnoregistroinicial3`(
in aidalumnoregistro varchar(25),
in aidregistro int(11),
in aidalumnoseccion int(11),
in asituacion varchar(250),
in apromedio1 varchar(2),
in apromedio2 varchar(2),
in apromedio3 varchar(2),
in apromedio4 varchar(2),
in apromedio5 varchar(2),
in apb varchar(2),
in ap11 varchar(2), in ap12 varchar(2), in ap13 varchar(2), in ap14 varchar(2), in ap15 varchar(2),
in ap16 varchar(2), in ap17 varchar(2), in ap18 varchar(2), in ap19 varchar(2), in ap110 varchar(2),
in ap21 varchar(2), in ap22 varchar(2), in ap23 varchar(2), in ap24 varchar(2), in ap25 varchar(2),
in ap26 varchar(2), in ap27 varchar(2), in ap28 varchar(2), in ap29 varchar(2), in ap210 varchar(2),
in ap31 varchar(2), in ap32 varchar(2), in ap33 varchar(2), in ap34 varchar(2), in ap35 varchar(2),
in ap36 varchar(2), in ap37 varchar(2), in ap38 varchar(2), in ap39 varchar(2), in ap310 varchar(2),
in ap41 varchar(2), in ap42 varchar(2), in ap43 varchar(2), in ap44 varchar(2), in ap45 varchar(2),
in ap46 varchar(2), in ap47 varchar(2), in ap48 varchar(2), in ap49 varchar(2), in ap410 varchar(2),
in ap51 varchar(2), in ap52 varchar(2), in ap53 varchar(2), in ap54 varchar(2), in ap55 varchar(2),
in ap56 varchar(2), in ap57 varchar(2), in ap58 varchar(2), in ap59 varchar(2), in ap510 varchar(2)
)
if exists(select * from Alumno_Registroinicial3 where idalumnoregistro=aidalumnoregistro) then 
	update Alumno_Registroinicial3
	set	
	idalumnoregistro=aidalumnoregistro,
	idregistro=aidregistro,
	idalumnoseccion=aidalumnoseccion,
	situacion=asituacion,
	promedio1=apromedio1,
	promedio2=apromedio2,
	promedio3=apromedio3,
	promedio4=apromedio4,
	promedio5=apromedio5,
	pb=apb,
	
	p11=ap11,p12=ap12,p13=ap13,p14=ap14,p15=ap15,
	p16=ap16,p17=ap17,p18=ap18,p19=ap19,p110=ap110,
	
	p21=ap21,p22=ap22,p23=ap23,p24=ap24,p25=ap25,
	p26=ap26,p27=ap27,p28=ap28,p29=ap29,p210=ap210,
	
	p31=ap31,p32=ap32,p33=ap33,p34=ap34,p35=ap35,
	p36=ap36,p37=ap37,p38=ap38,p39=ap39,p310=ap310,

	p41=ap41,p42=ap42,p43=ap43,p44=ap44,p45=ap45,
	p46=ap46,p47=ap47,p48=ap48,p49=ap49,p410=ap410,
	
	p51=ap51,p52=ap52,p53=ap53,p54=ap54,p55=ap55,
	p56=ap56,p57=ap57,p58=ap58,p59=ap59,p510=ap510
    
    where 
    idalumnoregistro=aidalumnoregistro;
else
	insert into Alumno_Registroinicial3
	values
	(	aidalumnoregistro,aidregistro,aidalumnoseccion,asituacion,
        apromedio1,apromedio2,apromedio3,apromedio4,apromedio5,apb,
	ap11,ap12,ap13,ap14,ap15,ap16,ap17,ap18,ap19,ap110,
	ap21,ap22,ap23,ap24,ap25,ap26,ap27,ap28,ap29,ap210,
	ap31,ap32,ap33,ap34,ap35,ap36,ap37,ap38,ap39,ap310,
	ap41,ap42,ap43,ap44,ap45,ap46,ap47,ap48,ap49,ap410,
	ap51,ap52,ap53,ap54,ap55,ap56,ap57,ap58,ap59,ap510
	);
end if$$

CREATE DEFINER=`urp881`@`localhost` PROCEDURE `SP_Alumno_Seccion_Pf`(
in acodigo int(11),
in acodigoas int(11),

in a1pf1 varchar(2),
in a1pf2 varchar(2),
in a1pf3 varchar(2),
in a1pf4 varchar(2),
in a1pf5 varchar(2),
in a1pf6 varchar(2),
in a1pf7 varchar(2),
in a1pf8 varchar(2),

in a2pf1 varchar(2),
in a2pf2 varchar(2),
in a2pf3 varchar(2),
in a2pf4 varchar(2),
in a2pf5 varchar(2),
in a2pf6 varchar(2),
in a2pf7 varchar(2),
in a2pf8 varchar(2),

in a3pf1 varchar(2),
in a3pf2 varchar(2),
in a3pf3 varchar(2),
in a3pf4 varchar(2),
in a3pf5 varchar(2),
in a3pf6 varchar(2),
in a3pf7 varchar(2),
in a3pf8 varchar(2),

in a4pf1 varchar(2),
in a4pf2 varchar(2),
in a4pf3 varchar(2),
in a4pf4 varchar(2),
in a4pf5 varchar(2),
in a4pf6 varchar(2),
in a4pf7 varchar(2),
in a4pf8 varchar(2),
in a3pf9 varchar(2),
in a4pf9 varchar(2)
)
if exists(select * from Alumno_Seccion_Pf where codigo=acodigo) then
update Alumno_Seccion_Pf
set
		codigoas=acodigoas,

		2pf1=a2pf1,
		2pf2=a2pf2,
		2pf3=a2pf3,
		2pf4=a2pf4,
		2pf5=a2pf5,
		2pf6=a2pf6,
		2pf7=a2pf7,
		2pf8=a2pf8,

		3pf1=a3pf1,
		3pf2=a3pf2,
		3pf3=a3pf3,
		3pf4=a3pf4,
		3pf5=a3pf5,
		3pf6=a3pf6,
		3pf7=a3pf7,
		3pf8=a3pf8,

		4pf1=a4pf1,
		4pf2=a4pf2,
		4pf3=a4pf3,
		4pf4=a4pf4,
		4pf5=a4pf5,
		4pf6=a4pf6,
		4pf7=a4pf7,
		4pf8=a4pf8,

		3pf9=a3pf9,
		4pf9=a4pf9

		where codigo=acodigo;
else
	insert into Alumno_Seccion_Pf
	(
		codigoas,
		1pf1, 1pf2, 1pf3, 1pf4, 1pf5, 1pf6, 1pf7, 1pf8,
		2pf1, 2pf2, 2pf3, 2pf4, 2pf5, 2pf6, 2pf7, 2pf8,
		3pf1, 3pf2, 3pf3, 3pf4, 3pf5, 3pf6, 3pf7, 3pf8,
		4pf1, 4pf2, 4pf3, 4pf4, 4pf5, 4pf6, 4pf7, 4pf8,3pf9,4pf9
	)
	values
	(
		acodigoas,
		a1pf1, a1pf2, a1pf3, a1pf4, a1pf5, a1pf6, a1pf7, a1pf8,
		a2pf1, a2pf2, a2pf3, a2pf4, a2pf5, a2pf6, a2pf7, a2pf8,
		a3pf1, a3pf2, a3pf3, a3pf4, a3pf5, a3pf6, a3pf7, a3pf8,
		a4pf1, a4pf2, a4pf3, a4pf4, a4pf5, a4pf6, a4pf7, a4pf8, a3pf9, a4pf9
	);
end if$$

CREATE DEFINER=`userdat`@`localhost` PROCEDURE `Sp_Asinatura`(
	in acodigo int(11),
	in acodigogrado int(2),
	in acodigonivel int(1),
	in acodigocurso int(11),
	in aasinatura varchar(250),
	in aabreviatura varchar(250),
	in ahorassemanales int(2),
	in anumerocapacidades int(2)
)
if exists(select * from Asinatura where codigo=acodigo) then 
	update Asinatura
	set
	codigogrado=acodigogrado,
	codigonivel=acodigonivel,
	codigocurso=acodigocurso,
	asinatura=aasinatura,
	abreviatura=aabreviatura,
	horassemanales=ahorassemanales,
	numerocapacidades=anumerocapacidades
	where codigo=acodigo;
else
	insert into Asinatura
		(codigogrado,codigonivel,codigocurso,asinatura,abreviatura,horassemanales,numerocapacidades)
		values
		(acodigogrado,acodigonivel,acodigocurso,aasinatura,aabreviatura,ahorassemanales,anumerocapacidades);
end if$$

CREATE DEFINER=`urp881`@`localhost` PROCEDURE `Sp_Curso`(
in acodigo int(11),
in acurso varchar(50)
)
if exists (select * from Curso where codigo=acodigo) then
    update Curso
    set
    curso=acurso
    where codigo=acodigo;
else
   insert into Curso 
   (curso)
   values
   (acurso);
end if$$

CREATE DEFINER=`urp881`@`localhost` PROCEDURE `Sp_Docente`(
in acodigo int(11),
in apaterno varchar(32),
in amaterno varchar(32),
in anombres varchar(150),
in adni char(8),
in acodigopersona int(11),
in atipoprofe int(11)
)
if exists(select * from Docente where codigo=acodigo) then 
	update Docente
	set	
paterno=apaterno,
materno=amaterno,
nombres=anombres,
dni=adni,
codigopersona=acodigopersona,
tipoprofe=atipoprofe
	where codigo=acodigo;
else
	insert into Docente
	(paterno,materno,nombres,dni,codigopersona,tipoprofe)
         values
	(apaterno,amaterno,anombres,adni,acodigopersona,atipoprofe);
end if$$

CREATE DEFINER=`urp881`@`localhost` PROCEDURE `Sp_Indicador`(IN `acodigo` INT(11), IN `aidcomponente` INT(11), IN `anro_criterio` INT(11), IN `acriterio` VARCHAR(257) CHARSET utf8, IN `apeso` INT(3))
if exists(select * from Indicador where codigo=acodigo) then 
	update Indicador
	set	
idcomponente=aidcomponente,
nro_criterio=anro_criterio,
criterio=acriterio,
peso=apeso
where
codigo=acodigo;
else
	insert into Indicador
	(idcomponente,nro_criterio,criterio,peso)
         values
	(aidcomponente,anro_criterio,acriterio,apeso);
end if$$

CREATE DEFINER=`urp881`@`localhost` PROCEDURE `Sp_Personas`(
in acodigo int(11),
in apaterno varchar(50),
in amaterno varchar(50),
in anombres varchar(100),
in adni char(8),
in asexo char(1),
in aemail varchar(100)
)
if exists( select * from Persona where codigo=acodigo) then
	update Persona
	set
	paterno=apaterno,
	materno=amaterno,
	nombres=anombres,
	dni=adni,
	sexo=asexo,
	email=aemail
	where
	codigo=acodigo;
else
	insert into Persona
	(paterno,materno,nombres,dni,sexo,email)
	values
	(apaterno,amaterno,anombres,adni,asexo,aemail);
end if$$

CREATE DEFINER=`userdat`@`localhost` PROCEDURE `Sp_Registro`(
in acodigo int(11),
in acodigoseccion int(11),
in acodigodocente int(11),
in acodigoasinatura int(11),
in auno int(1),
in ados int(1),
in atres int(1),
in acuatro int(1)
)
if exists(select * from Registro where codigo=acodigo) then 
	update Registro
	set	
	codigoseccion=acodigoseccion,
	codigodocente=acodigodocente,
	codigoasinatura=acodigoasinatura,
	activo1=auno,
	activo2=ados,
	activo3=atres,
	activo4=acuatro
where
codigo=acodigo;
else
	insert into Registro
	(codigoseccion,codigodocente,codigoasinatura,activo1,activo2,activo3,activo4)
         values
	(acodigoseccion,acodigodocente,acodigoasinatura,auno,ados,atres,acuatro);
end if$$

CREATE DEFINER=`urp881`@`localhost` PROCEDURE `Sp_Seccion`(
in acodigo int(11),
in aano_escolar char(4),
in acod_nivel int(1),
in acod_grado int(2),
in anombreseccion varchar(25),
in acod_tutor int(11),
in acod_auxiliar int(11),
in acod_registroasistencia int(11),
in acod_psicologo int(11)
)
if exists(Select * from Seccion where codigo=acodigo ) then
update Seccion set
ano_escolar=aano_escolar,
cod_nivel=acod_nivel,
cod_grado=acod_grado,
nombreseccion=anombreseccion,
cod_tutor=acod_tutor,
cod_auxiliar=acod_auxiliar,
cod_registroasistencia=acod_registroasistencia,
cod_psicologo=acod_psicologo
where codigo=acodigo;
else
insert into Seccion
(ano_escolar,cod_nivel,cod_grado,nombreseccion,cod_tutor,cod_auxiliar,cod_registroasistencia,cod_psicologo)
values
(aano_escolar,acod_nivel,acod_grado,anombreseccion,acod_tutor,acod_auxiliar,acod_registroasistencia,acod_psicologo);
END IF$$

CREATE DEFINER=`urp881`@`localhost` PROCEDURE `Sp_Usuario`(
in acodigo int(11),
in ausuario varchar(15),
in acontrasena varchar(32),
in aidperfil int(4),
in aestado varchar(100),
in aidpersona int(11),
in anivel int(1),
in ainscripcion date,
in aultimasesion datetime
)
if exists(select * from Usuario where codigo=acodigo) then 
	update Usuario
	set	
usuario=ausuario,
contrasena=acontrasena,
idperfil=aidperfil,
estado=aestado,
idpersona=aidpersona,
nivel=anivel,
inscripcion=ainscripcion,
ultimasesion=aultimasesion
where
codigo=acodigo;
else
	insert into Usuario
	(usuario,contrasena,idperfil,estado,idpersona,nivel,inscripcion,ultimasesion)
         values
        (ausuario,acontrasena,aidperfil,aestado,aidpersona,anivel,ainscripcion,aultimasesion);
end if$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `1Alumno_Registro`
--

CREATE TABLE IF NOT EXISTS `1Alumno_Registro` (
  `idalumnoregistro` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `idregistro` int(11) DEFAULT NULL,
  `idalumnoseccion` int(11) DEFAULT NULL,
  `situacion` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `1promedio1` decimal(10,2) DEFAULT NULL,
  `1promedio2` decimal(10,2) DEFAULT NULL,
  `1promedio3` decimal(10,2) DEFAULT NULL,
  `1promedio4` decimal(10,2) DEFAULT NULL,
  `1promedio5` decimal(10,2) DEFAULT NULL,
  `1pb` int(2) DEFAULT NULL,
  `1p11` int(2) DEFAULT NULL,
  `1p12` int(2) DEFAULT NULL,
  `1p13` int(2) DEFAULT NULL,
  `1p14` int(2) DEFAULT NULL,
  `1p15` int(2) DEFAULT NULL,
  `1p16` int(2) DEFAULT NULL,
  `1p17` int(2) DEFAULT NULL,
  `1p18` int(2) DEFAULT NULL,
  `1p19` int(2) DEFAULT NULL,
  `1p110` int(2) DEFAULT NULL,
  `1p21` int(2) DEFAULT NULL,
  `1p22` int(2) DEFAULT NULL,
  `1p23` int(2) DEFAULT NULL,
  `1p24` int(2) DEFAULT NULL,
  `1p25` int(2) DEFAULT NULL,
  `1p26` int(2) DEFAULT NULL,
  `1p27` int(2) DEFAULT NULL,
  `1p28` int(2) DEFAULT NULL,
  `1p29` int(2) DEFAULT NULL,
  `1p210` int(2) DEFAULT NULL,
  `1p31` int(2) DEFAULT NULL,
  `1p32` int(2) DEFAULT NULL,
  `1p33` int(2) DEFAULT NULL,
  `1p34` int(2) DEFAULT NULL,
  `1p35` int(2) DEFAULT NULL,
  `1p36` int(2) DEFAULT NULL,
  `1p37` int(2) DEFAULT NULL,
  `1p38` int(2) DEFAULT NULL,
  `1p39` int(2) DEFAULT NULL,
  `1p310` int(2) DEFAULT NULL,
  `1p41` int(2) DEFAULT NULL,
  `1p42` int(2) DEFAULT NULL,
  `1p43` int(2) DEFAULT NULL,
  `1p44` int(2) DEFAULT NULL,
  `1p45` int(2) DEFAULT NULL,
  `1p46` int(2) DEFAULT NULL,
  `1p47` int(2) DEFAULT NULL,
  `1p48` int(2) DEFAULT NULL,
  `1p49` int(2) DEFAULT NULL,
  `1p410` int(2) DEFAULT NULL,
  `1p51` int(2) DEFAULT NULL,
  `1p52` int(2) DEFAULT NULL,
  `1p53` int(2) DEFAULT NULL,
  `1p54` int(2) DEFAULT NULL,
  `1p55` int(2) DEFAULT NULL,
  `1p56` int(2) DEFAULT NULL,
  `1p57` int(2) DEFAULT NULL,
  `1p58` int(2) DEFAULT NULL,
  `1p59` int(2) DEFAULT NULL,
  `1p510` int(2) DEFAULT NULL,
  PRIMARY KEY (`idalumnoregistro`),
  KEY `idregistro` (`idregistro`),
  KEY `idalumnoseccion` (`idalumnoseccion`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `2Alumno_Registro`
--

CREATE TABLE IF NOT EXISTS `2Alumno_Registro` (
  `idalumnoregistro` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `idregistro` int(11) DEFAULT NULL,
  `idalumnoseccion` int(11) DEFAULT NULL,
  `situacion` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `2promedio1` decimal(10,2) DEFAULT NULL,
  `2promedio2` decimal(10,2) DEFAULT NULL,
  `2promedio3` decimal(10,2) DEFAULT NULL,
  `2promedio4` decimal(10,2) DEFAULT NULL,
  `2promedio5` decimal(10,2) DEFAULT NULL,
  `2pb` int(2) DEFAULT NULL,
  `2p11` int(2) DEFAULT NULL,
  `2p12` int(2) DEFAULT NULL,
  `2p13` int(2) DEFAULT NULL,
  `2p14` int(2) DEFAULT NULL,
  `2p15` int(2) DEFAULT NULL,
  `2p16` int(2) DEFAULT NULL,
  `2p17` int(2) DEFAULT NULL,
  `2p18` int(2) DEFAULT NULL,
  `2p19` int(2) DEFAULT NULL,
  `2p110` int(2) DEFAULT NULL,
  `2p111` int(2) DEFAULT NULL,
  `2p112` int(2) DEFAULT NULL,
  `2p113` int(2) DEFAULT NULL,
  `2p21` int(2) DEFAULT NULL,
  `2p22` int(2) DEFAULT NULL,
  `2p23` int(2) DEFAULT NULL,
  `2p24` int(2) DEFAULT NULL,
  `2p25` int(2) DEFAULT NULL,
  `2p26` int(2) DEFAULT NULL,
  `2p27` int(2) DEFAULT NULL,
  `2p28` int(2) DEFAULT NULL,
  `2p29` int(2) DEFAULT NULL,
  `2p210` int(2) DEFAULT NULL,
  `2p31` int(2) DEFAULT NULL,
  `2p32` int(2) DEFAULT NULL,
  `2p33` int(2) DEFAULT NULL,
  `2p34` int(2) DEFAULT NULL,
  `2p35` int(2) DEFAULT NULL,
  `2p36` int(2) DEFAULT NULL,
  `2p37` int(2) DEFAULT NULL,
  `2p38` int(2) DEFAULT NULL,
  `2p39` int(2) DEFAULT NULL,
  `2p310` int(2) DEFAULT NULL,
  `2p41` int(2) DEFAULT NULL,
  `2p42` int(2) DEFAULT NULL,
  `2p43` int(2) DEFAULT NULL,
  `2p44` int(2) DEFAULT NULL,
  `2p45` int(2) DEFAULT NULL,
  `2p46` int(2) DEFAULT NULL,
  `2p47` int(2) DEFAULT NULL,
  `2p48` int(2) DEFAULT NULL,
  `2p49` int(2) DEFAULT NULL,
  `2p410` int(2) DEFAULT NULL,
  `2p51` int(2) DEFAULT NULL,
  `2p52` int(2) DEFAULT NULL,
  `2p53` int(2) DEFAULT NULL,
  `2p54` int(2) DEFAULT NULL,
  `2p55` int(2) DEFAULT NULL,
  `2p56` int(2) DEFAULT NULL,
  `2p57` int(2) DEFAULT NULL,
  `2p58` int(2) DEFAULT NULL,
  `2p59` int(2) DEFAULT NULL,
  `2p510` int(2) DEFAULT NULL,
  PRIMARY KEY (`idalumnoregistro`),
  KEY `idregistro` (`idregistro`),
  KEY `idalumnoseccion` (`idalumnoseccion`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `3Alumno_Registro`
--

CREATE TABLE IF NOT EXISTS `3Alumno_Registro` (
  `idalumnoregistro` varchar(20) NOT NULL,
  `idregistro` int(11) DEFAULT NULL,
  `idalumnoseccion` int(11) DEFAULT NULL,
  `situacion` varchar(250) DEFAULT NULL,
  `3promedio1` decimal(10,2) DEFAULT NULL,
  `3promedio2` decimal(10,2) DEFAULT NULL,
  `3promedio3` decimal(10,2) DEFAULT NULL,
  `3promedio4` decimal(10,2) DEFAULT NULL,
  `3promedio5` decimal(10,2) DEFAULT NULL,
  `3pb` int(2) DEFAULT NULL,
  `3p11` int(2) DEFAULT NULL,
  `3p12` int(2) DEFAULT NULL,
  `3p13` int(2) DEFAULT NULL,
  `3p14` int(2) DEFAULT NULL,
  `3p15` int(2) DEFAULT NULL,
  `3p16` int(2) DEFAULT NULL,
  `3p17` int(2) DEFAULT NULL,
  `3p18` int(2) DEFAULT NULL,
  `3p19` int(2) DEFAULT NULL,
  `3p110` int(2) DEFAULT NULL,
  `3p111` int(2) DEFAULT NULL,
  `3p112` int(2) DEFAULT NULL,
  `3p113` int(2) DEFAULT NULL,
  `3p21` int(2) DEFAULT NULL,
  `3p22` int(2) DEFAULT NULL,
  `3p23` int(2) DEFAULT NULL,
  `3p24` int(2) DEFAULT NULL,
  `3p25` int(2) DEFAULT NULL,
  `3p26` int(2) DEFAULT NULL,
  `3p27` int(2) DEFAULT NULL,
  `3p28` int(2) DEFAULT NULL,
  `3p29` int(2) DEFAULT NULL,
  `3p210` int(2) DEFAULT NULL,
  `3p211` int(2) DEFAULT NULL,
  `3p212` int(2) DEFAULT NULL,
  `3p31` int(2) DEFAULT NULL,
  `3p32` int(2) DEFAULT NULL,
  `3p33` int(2) DEFAULT NULL,
  `3p34` int(2) DEFAULT NULL,
  `3p35` int(2) DEFAULT NULL,
  `3p36` int(2) DEFAULT NULL,
  `3p37` int(2) DEFAULT NULL,
  `3p38` int(2) DEFAULT NULL,
  `3p39` int(2) DEFAULT NULL,
  `3p310` int(2) DEFAULT NULL,
  `3p311` int(2) DEFAULT NULL,
  `3p312` int(2) DEFAULT NULL,
  `3p313` int(2) DEFAULT NULL,
  `3p41` int(2) DEFAULT NULL,
  `3p42` int(2) DEFAULT NULL,
  `3p43` int(2) DEFAULT NULL,
  `3p44` int(2) DEFAULT NULL,
  `3p45` int(2) DEFAULT NULL,
  `3p46` int(2) DEFAULT NULL,
  `3p47` int(2) DEFAULT NULL,
  `3p48` int(2) DEFAULT NULL,
  `3p49` int(2) DEFAULT NULL,
  `3p410` int(2) DEFAULT NULL,
  `3p411` int(2) DEFAULT NULL,
  `3p412` int(2) DEFAULT NULL,
  `3p51` int(2) DEFAULT NULL,
  `3p52` int(2) DEFAULT NULL,
  `3p53` int(2) DEFAULT NULL,
  `3p54` int(2) DEFAULT NULL,
  `3p55` int(2) DEFAULT NULL,
  `3p56` int(2) DEFAULT NULL,
  `3p57` int(2) DEFAULT NULL,
  `3p58` int(2) DEFAULT NULL,
  `3p59` int(2) DEFAULT NULL,
  `3p510` int(2) DEFAULT NULL,
  `3p511` int(2) DEFAULT NULL,
  `3p512` int(2) DEFAULT NULL,
  PRIMARY KEY (`idalumnoregistro`),
  KEY `idregistro` (`idregistro`),
  KEY `idalumnoseccion` (`idalumnoseccion`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `4Alumno_Registro`
--

CREATE TABLE IF NOT EXISTS `4Alumno_Registro` (
  `idalumnoregistro` varchar(20) NOT NULL,
  `idregistro` int(11) DEFAULT NULL,
  `idalumnoseccion` int(11) DEFAULT NULL,
  `situacion` varchar(250) DEFAULT NULL,
  `4promedio1` decimal(10,2) DEFAULT NULL,
  `4promedio2` decimal(10,2) DEFAULT NULL,
  `4promedio3` decimal(10,2) DEFAULT NULL,
  `4promedio4` decimal(10,2) DEFAULT NULL,
  `4promedio5` decimal(10,2) DEFAULT NULL,
  `4pb` int(2) DEFAULT NULL,
  `4p11` int(2) DEFAULT NULL,
  `4p12` int(2) DEFAULT NULL,
  `4p13` int(2) DEFAULT NULL,
  `4p14` int(2) DEFAULT NULL,
  `4p15` int(2) DEFAULT NULL,
  `4p16` int(2) DEFAULT NULL,
  `4p17` int(2) DEFAULT NULL,
  `4p18` int(2) DEFAULT NULL,
  `4p19` int(2) DEFAULT NULL,
  `4p110` int(2) DEFAULT NULL,
  `4p21` int(2) DEFAULT NULL,
  `4p22` int(2) DEFAULT NULL,
  `4p23` int(2) DEFAULT NULL,
  `4p24` int(2) DEFAULT NULL,
  `4p25` int(2) DEFAULT NULL,
  `4p26` int(2) DEFAULT NULL,
  `4p27` int(2) DEFAULT NULL,
  `4p28` int(2) DEFAULT NULL,
  `4p29` int(2) DEFAULT NULL,
  `4p210` int(2) DEFAULT NULL,
  `4p31` int(2) DEFAULT NULL,
  `4p32` int(2) DEFAULT NULL,
  `4p33` int(2) DEFAULT NULL,
  `4p34` int(2) DEFAULT NULL,
  `4p35` int(2) DEFAULT NULL,
  `4p36` int(2) DEFAULT NULL,
  `4p37` int(2) DEFAULT NULL,
  `4p38` int(2) DEFAULT NULL,
  `4p39` int(2) DEFAULT NULL,
  `4p310` int(2) DEFAULT NULL,
  `4p41` int(2) DEFAULT NULL,
  `4p42` int(2) DEFAULT NULL,
  `4p43` int(2) DEFAULT NULL,
  `4p44` int(2) DEFAULT NULL,
  `4p45` int(2) DEFAULT NULL,
  `4p46` int(2) DEFAULT NULL,
  `4p47` int(2) DEFAULT NULL,
  `4p48` int(2) DEFAULT NULL,
  `4p49` int(2) DEFAULT NULL,
  `4p410` int(2) DEFAULT NULL,
  `4p51` int(2) DEFAULT NULL,
  `4p52` int(2) DEFAULT NULL,
  `4p53` int(2) DEFAULT NULL,
  `4p54` int(2) DEFAULT NULL,
  `4p55` int(2) DEFAULT NULL,
  `4p56` int(2) DEFAULT NULL,
  `4p57` int(2) DEFAULT NULL,
  `4p58` int(2) DEFAULT NULL,
  `4p59` int(2) DEFAULT NULL,
  `4p510` int(2) DEFAULT NULL,
  PRIMARY KEY (`idalumnoregistro`),
  KEY `idregistro` (`idregistro`),
  KEY `idalumnoseccion` (`idalumnoseccion`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Alumno`
--

CREATE TABLE IF NOT EXISTS `Alumno` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `idpersona` int(11) NOT NULL,
  `cod_seccion` int(11) DEFAULT NULL,
  `paterno` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `materno` varchar(25) CHARACTER SET latin1 DEFAULT NULL,
  `nombres` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `nacionalidad` varchar(25) CHARACTER SET latin1 DEFAULT NULL,
  `sexo` char(1) CHARACTER SET latin1 DEFAULT NULL,
  `dni` char(8) CHARACTER SET latin1 DEFAULT NULL,
  `fechainscripcion` date DEFAULT NULL,
  `matriculante` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `fechanacimiento` date DEFAULT NULL,
  `departamento_nac` varchar(25) CHARACTER SET latin1 DEFAULT NULL,
  `provincia_nac` varchar(25) CHARACTER SET latin1 DEFAULT NULL,
  `distrito_nac` varchar(25) CHARACTER SET latin1 DEFAULT NULL,
  `localidad_nac` varchar(25) CHARACTER SET latin1 DEFAULT NULL,
  `tipodeparto` varchar(25) CHARACTER SET latin1 DEFAULT NULL,
  `descripcion_parto` varchar(25) CHARACTER SET latin1 DEFAULT NULL,
  `departamento` varchar(25) CHARACTER SET latin1 DEFAULT NULL,
  `provincia` varchar(25) CHARACTER SET latin1 DEFAULT NULL,
  `distrito` varchar(25) CHARACTER SET latin1 DEFAULT NULL,
  `domicilio` varchar(25) CHARACTER SET latin1 DEFAULT NULL,
  `ano_residencia` char(4) CHARACTER SET latin1 DEFAULT NULL,
  `celular` char(9) CHARACTER SET latin1 DEFAULT NULL,
  `fijo` varchar(9) CHARACTER SET latin1 DEFAULT NULL,
  `rpm` varchar(9) CHARACTER SET latin1 DEFAULT NULL,
  `rcp` varchar(9) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(55) CHARACTER SET latin1 DEFAULT NULL,
  `religion` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `alergicomedicamento1` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `alergicomedicamento2` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `alergicomedicamento3` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `alergicomedicamento4` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `alergia_polvo_acaro` tinyint(1) DEFAULT NULL,
  `alergia_humedad_hongos` tinyint(1) DEFAULT NULL,
  `tipo_sangre` varchar(25) CHARACTER SET latin1 DEFAULT NULL,
  `becado` tinyint(1) DEFAULT NULL,
  `tipo_beca` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `resolucion_beca` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `cant_hermanos` int(2) DEFAULT NULL,
  `lugar_hermanos` int(2) DEFAULT NULL,
  `colegioprocedente` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `cod_seccion` (`cod_seccion`),
  KEY `fk_per_alum` (`idpersona`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3010 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Alumno_Registroinicial`
--

CREATE TABLE IF NOT EXISTS `Alumno_Registroinicial` (
  `idalumnoregistro` varchar(25) NOT NULL,
  `idregistro` int(11) DEFAULT NULL,
  `idalumnoseccion` int(11) DEFAULT NULL,
  `situacion` varchar(250) DEFAULT NULL,
  `promedio1` varchar(2) DEFAULT NULL,
  `promedio2` varchar(2) DEFAULT NULL,
  `promedio3` varchar(2) DEFAULT NULL,
  `promedio4` varchar(2) DEFAULT NULL,
  `promedio5` varchar(2) DEFAULT NULL,
  `pb` varchar(2) DEFAULT NULL,
  `p11` varchar(2) DEFAULT NULL,
  `p12` varchar(2) DEFAULT NULL,
  `p13` varchar(2) DEFAULT NULL,
  `p14` varchar(2) DEFAULT NULL,
  `p15` varchar(2) DEFAULT NULL,
  `p16` varchar(2) DEFAULT NULL,
  `p17` varchar(2) DEFAULT NULL,
  `p18` varchar(2) DEFAULT NULL,
  `p19` varchar(2) DEFAULT NULL,
  `p110` varchar(2) DEFAULT NULL,
  `p111` varchar(2) NOT NULL,
  `p112` varchar(2) NOT NULL,
  `p113` varchar(2) NOT NULL,
  `p114` varchar(2) NOT NULL,
  `p21` varchar(2) DEFAULT NULL,
  `p22` varchar(2) DEFAULT NULL,
  `p23` varchar(2) DEFAULT NULL,
  `p24` varchar(2) DEFAULT NULL,
  `p25` varchar(2) DEFAULT NULL,
  `p26` varchar(2) DEFAULT NULL,
  `p27` varchar(2) DEFAULT NULL,
  `p28` varchar(2) DEFAULT NULL,
  `p29` varchar(2) DEFAULT NULL,
  `p210` varchar(2) DEFAULT NULL,
  `p31` varchar(2) DEFAULT NULL,
  `p32` varchar(2) DEFAULT NULL,
  `p33` varchar(2) DEFAULT NULL,
  `p34` varchar(2) DEFAULT NULL,
  `p35` varchar(2) DEFAULT NULL,
  `p36` varchar(2) DEFAULT NULL,
  `p37` varchar(2) DEFAULT NULL,
  `p38` varchar(2) DEFAULT NULL,
  `p39` varchar(2) DEFAULT NULL,
  `p310` varchar(2) DEFAULT NULL,
  `p41` varchar(2) DEFAULT NULL,
  `p42` varchar(2) DEFAULT NULL,
  `p43` varchar(2) DEFAULT NULL,
  `p44` varchar(2) DEFAULT NULL,
  `p45` varchar(2) DEFAULT NULL,
  `p46` varchar(2) DEFAULT NULL,
  `p47` varchar(2) DEFAULT NULL,
  `p48` varchar(2) DEFAULT NULL,
  `p49` varchar(2) DEFAULT NULL,
  `p410` varchar(2) DEFAULT NULL,
  `p51` varchar(2) DEFAULT NULL,
  `p52` varchar(2) DEFAULT NULL,
  `p53` varchar(2) DEFAULT NULL,
  `p54` varchar(2) DEFAULT NULL,
  `p55` varchar(2) DEFAULT NULL,
  `p56` varchar(2) DEFAULT NULL,
  `p57` varchar(2) DEFAULT NULL,
  `p58` varchar(2) DEFAULT NULL,
  `p59` varchar(2) DEFAULT NULL,
  `p510` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`idalumnoregistro`),
  KEY `idregistro` (`idregistro`),
  KEY `idalumnoseccion` (`idalumnoseccion`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Alumno_Registroinicial2`
--

CREATE TABLE IF NOT EXISTS `Alumno_Registroinicial2` (
  `idalumnoregistro` varchar(25) CHARACTER SET latin1 NOT NULL,
  `idregistro` int(11) DEFAULT NULL,
  `idalumnoseccion` int(11) DEFAULT NULL,
  `situacion` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `promedio1` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `promedio2` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `promedio3` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `promedio4` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `promedio5` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `pb` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p11` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p12` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p13` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p14` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p15` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p16` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p17` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p18` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p19` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p110` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p111` varchar(2) CHARACTER SET latin1 NOT NULL,
  `p112` varchar(2) CHARACTER SET latin1 NOT NULL,
  `p113` varchar(2) CHARACTER SET latin1 NOT NULL,
  `p114` varchar(2) CHARACTER SET latin1 NOT NULL,
  `p21` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p22` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p23` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p24` varchar(2) DEFAULT NULL,
  `p25` varchar(2) DEFAULT NULL,
  `p26` varchar(2) DEFAULT NULL,
  `p27` varchar(2) DEFAULT NULL,
  `p28` varchar(2) DEFAULT NULL,
  `p29` varchar(2) DEFAULT NULL,
  `p210` varchar(2) DEFAULT NULL,
  `p31` varchar(2) DEFAULT NULL,
  `p32` varchar(2) DEFAULT NULL,
  `p33` varchar(2) DEFAULT NULL,
  `p34` varchar(2) DEFAULT NULL,
  `p35` varchar(2) DEFAULT NULL,
  `p36` varchar(2) DEFAULT NULL,
  `p37` varchar(2) DEFAULT NULL,
  `p38` varchar(2) DEFAULT NULL,
  `p39` varchar(2) DEFAULT NULL,
  `p310` varchar(2) DEFAULT NULL,
  `p41` varchar(2) DEFAULT NULL,
  `p42` varchar(2) DEFAULT NULL,
  `p43` varchar(2) DEFAULT NULL,
  `p44` varchar(2) DEFAULT NULL,
  `p45` varchar(2) DEFAULT NULL,
  `p46` varchar(2) DEFAULT NULL,
  `p47` varchar(2) DEFAULT NULL,
  `p48` varchar(2) DEFAULT NULL,
  `p49` varchar(2) DEFAULT NULL,
  `p410` varchar(2) DEFAULT NULL,
  `p51` varchar(2) DEFAULT NULL,
  `p52` varchar(2) DEFAULT NULL,
  `p53` varchar(2) DEFAULT NULL,
  `p54` varchar(2) DEFAULT NULL,
  `p55` varchar(2) DEFAULT NULL,
  `p56` varchar(2) DEFAULT NULL,
  `p57` varchar(2) DEFAULT NULL,
  `p58` varchar(2) DEFAULT NULL,
  `p59` varchar(2) DEFAULT NULL,
  `p510` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`idalumnoregistro`),
  KEY `idregistro` (`idregistro`),
  KEY `idalumnoseccion` (`idalumnoseccion`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Alumno_Registroinicial3`
--

CREATE TABLE IF NOT EXISTS `Alumno_Registroinicial3` (
  `idalumnoregistro` varchar(25) CHARACTER SET latin1 NOT NULL,
  `idregistro` int(11) DEFAULT NULL,
  `idalumnoseccion` int(11) DEFAULT NULL,
  `situacion` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `promedio1` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `promedio2` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `promedio3` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `promedio4` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `promedio5` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `pb` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p11` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p12` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p13` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p14` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p15` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p16` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p17` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p18` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p19` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p110` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p21` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p22` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p23` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p24` varchar(2) DEFAULT NULL,
  `p25` varchar(2) DEFAULT NULL,
  `p26` varchar(2) DEFAULT NULL,
  `p27` varchar(2) DEFAULT NULL,
  `p28` varchar(2) DEFAULT NULL,
  `p29` varchar(2) DEFAULT NULL,
  `p210` varchar(2) DEFAULT NULL,
  `p31` varchar(2) DEFAULT NULL,
  `p32` varchar(2) DEFAULT NULL,
  `p33` varchar(2) DEFAULT NULL,
  `p34` varchar(2) DEFAULT NULL,
  `p35` varchar(2) DEFAULT NULL,
  `p36` varchar(2) DEFAULT NULL,
  `p37` varchar(2) DEFAULT NULL,
  `p38` varchar(2) DEFAULT NULL,
  `p39` varchar(2) DEFAULT NULL,
  `p310` varchar(2) DEFAULT NULL,
  `p41` varchar(2) DEFAULT NULL,
  `p42` varchar(2) DEFAULT NULL,
  `p43` varchar(2) DEFAULT NULL,
  `p44` varchar(2) DEFAULT NULL,
  `p45` varchar(2) DEFAULT NULL,
  `p46` varchar(2) DEFAULT NULL,
  `p47` varchar(2) DEFAULT NULL,
  `p48` varchar(2) DEFAULT NULL,
  `p49` varchar(2) DEFAULT NULL,
  `p410` varchar(2) DEFAULT NULL,
  `p51` varchar(2) DEFAULT NULL,
  `p52` varchar(2) DEFAULT NULL,
  `p53` varchar(2) DEFAULT NULL,
  `p54` varchar(2) DEFAULT NULL,
  `p55` varchar(2) DEFAULT NULL,
  `p56` varchar(2) DEFAULT NULL,
  `p57` varchar(2) DEFAULT NULL,
  `p58` varchar(2) DEFAULT NULL,
  `p59` varchar(2) DEFAULT NULL,
  `p510` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`idalumnoregistro`),
  KEY `idregistro` (`idregistro`),
  KEY `idalumnoseccion` (`idalumnoseccion`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Alumno_Registroinicial4`
--

CREATE TABLE IF NOT EXISTS `Alumno_Registroinicial4` (
  `idalumnoregistro` varchar(25) CHARACTER SET latin1 NOT NULL,
  `idregistro` int(11) DEFAULT NULL,
  `idalumnoseccion` int(11) DEFAULT NULL,
  `situacion` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `promedio1` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `promedio2` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `promedio3` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `promedio4` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `promedio5` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `pb` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p11` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p12` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p13` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p14` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p15` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p16` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p17` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p18` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p19` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p110` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p21` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p22` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p23` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p24` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p25` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p26` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p27` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p28` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p29` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p210` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p31` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p32` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p33` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p34` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p35` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p36` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p37` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p38` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p39` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p310` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p41` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p42` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p43` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p44` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p45` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p46` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p47` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p48` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p49` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p410` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p51` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p52` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p53` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p54` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p55` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p56` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p57` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p58` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p59` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `p510` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`idalumnoregistro`),
  KEY `idregistro` (`idregistro`),
  KEY `idalumnoseccion` (`idalumnoseccion`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Alumno_Seccion`
--

CREATE TABLE IF NOT EXISTS `Alumno_Seccion` (
  `idalumnoseccion` int(11) NOT NULL AUTO_INCREMENT,
  `idseccion` int(11) DEFAULT NULL,
  `nroorden` int(3) DEFAULT NULL,
  `idalumno` int(5) DEFAULT NULL,
  `situacion` varchar(250) DEFAULT NULL,
  `msn1` varchar(250) DEFAULT NULL,
  `msn2` varchar(250) DEFAULT NULL,
  `msn3` varchar(250) DEFAULT NULL,
  `msn4` varchar(250) DEFAULT NULL,
  `fj1` int(3) DEFAULT NULL,
  `fi1` int(3) DEFAULT NULL,
  `t1` int(3) DEFAULT NULL,
  `fj2` int(3) DEFAULT NULL,
  `fi2` int(3) DEFAULT NULL,
  `t2` int(3) DEFAULT NULL,
  `fj3` int(3) DEFAULT NULL,
  `fi3` int(3) DEFAULT NULL,
  `t3` int(3) DEFAULT NULL,
  `fj4` int(3) DEFAULT NULL,
  `fi4` int(3) DEFAULT NULL,
  `t4` int(3) DEFAULT NULL,
  PRIMARY KEY (`idalumnoseccion`),
  KEY `fk_als_se` (`idseccion`),
  KEY `fk_als_al` (`idalumno`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1931 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Alumno_Seccion_Pf`
--

CREATE TABLE IF NOT EXISTS `Alumno_Seccion_Pf` (
  `codigo` int(11) NOT NULL,
  `codigoas` int(11) DEFAULT NULL,
  `1pf1` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `1pf2` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `1pf3` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `1pf4` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `1pf5` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `1pf6` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `1pf7` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `1pf8` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `2pf1` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `2pf2` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `2pf3` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `2pf4` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `2pf5` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `2pf6` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `2pf7` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `2pf8` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `3pf1` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `3pf2` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `3pf3` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `3pf4` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `3pf5` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `3pf6` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `3pf7` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `3pf8` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `4pf1` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `4pf2` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `4pf3` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `4pf4` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `4pf5` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `4pf6` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `4pf7` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `4pf8` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `3pf9` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `4pf9` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`codigo`),
  KEY `codigoas` (`codigoas`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Area`
--

CREATE TABLE IF NOT EXISTS `Area` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `area` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Area_Curricular`
--

CREATE TABLE IF NOT EXISTS `Area_Curricular` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nomarea` int(11) DEFAULT NULL,
  `ano_escolar` int(4) DEFAULT NULL,
  `codigonivel` int(1) DEFAULT NULL,
  `posicion_acta` int(2) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `nomarea` (`nomarea`),
  KEY `codigonivel` (`codigonivel`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Asinatura`
--

CREATE TABLE IF NOT EXISTS `Asinatura` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `codigogrado` int(2) DEFAULT NULL,
  `codigonivel` int(1) DEFAULT NULL,
  `codigocurso` int(11) DEFAULT NULL,
  `asinatura` varchar(250) DEFAULT NULL,
  `abreviatura` varchar(250) DEFAULT NULL,
  `horassemanales` int(2) DEFAULT NULL,
  `numerocapacidades` int(2) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `codigogrado` (`codigogrado`),
  KEY `codigonivel` (`codigonivel`),
  KEY `codigocurso` (`codigocurso`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=183 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Boleta_Alumno`
--

CREATE TABLE IF NOT EXISTS `Boleta_Alumno` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `n11` int(2) DEFAULT NULL,
  `n12` int(2) DEFAULT NULL,
  `n13` int(2) DEFAULT NULL,
  `n14` int(2) DEFAULT NULL,
  `n15` int(2) DEFAULT NULL,
  `n16` int(2) DEFAULT NULL,
  `n17` int(2) DEFAULT NULL,
  `n18` int(2) DEFAULT NULL,
  `n19` int(2) DEFAULT NULL,
  `n110` int(2) DEFAULT NULL,
  `n111` int(2) DEFAULT NULL,
  `n112` int(2) DEFAULT NULL,
  `n113` int(2) DEFAULT NULL,
  `n114` int(2) DEFAULT NULL,
  `n21` int(2) DEFAULT NULL,
  `n22` int(2) DEFAULT NULL,
  `n23` int(2) DEFAULT NULL,
  `n24` int(2) DEFAULT NULL,
  `n25` int(2) DEFAULT NULL,
  `n26` int(2) DEFAULT NULL,
  `n27` int(2) DEFAULT NULL,
  `n28` int(2) DEFAULT NULL,
  `n29` int(2) DEFAULT NULL,
  `n210` int(2) DEFAULT NULL,
  `n211` int(2) DEFAULT NULL,
  `n212` int(2) DEFAULT NULL,
  `n213` int(2) DEFAULT NULL,
  `n214` int(2) DEFAULT NULL,
  `n31` int(2) DEFAULT NULL,
  `n32` int(2) DEFAULT NULL,
  `n33` int(2) DEFAULT NULL,
  `n34` int(2) DEFAULT NULL,
  `n35` int(2) DEFAULT NULL,
  `n36` int(2) DEFAULT NULL,
  `n37` int(2) DEFAULT NULL,
  `n38` int(2) DEFAULT NULL,
  `n39` int(2) DEFAULT NULL,
  `n310` int(2) DEFAULT NULL,
  `n311` int(2) DEFAULT NULL,
  `n312` int(2) DEFAULT NULL,
  `n313` int(2) DEFAULT NULL,
  `n314` int(2) DEFAULT NULL,
  `n41` int(2) DEFAULT NULL,
  `n42` int(2) DEFAULT NULL,
  `n43` int(2) DEFAULT NULL,
  `n44` int(2) DEFAULT NULL,
  `n45` int(2) DEFAULT NULL,
  `n46` int(2) DEFAULT NULL,
  `n47` int(2) DEFAULT NULL,
  `n48` int(2) DEFAULT NULL,
  `n49` int(2) DEFAULT NULL,
  `n410` int(2) DEFAULT NULL,
  `n411` int(2) DEFAULT NULL,
  `n412` int(2) DEFAULT NULL,
  `n413` int(2) DEFAULT NULL,
  `n414` int(2) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Cargo`
--

CREATE TABLE IF NOT EXISTS `Cargo` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `codigosubarea` int(11) DEFAULT NULL,
  `cargo` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `codigosubarea` (`codigosubarea`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=77 ;

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `cargodetallado`
--
CREATE TABLE IF NOT EXISTS `cargodetallado` (
`codigo` int(11)
,`area` varchar(50)
,`subarea` varchar(50)
,`cargo` varchar(50)
);
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Component`
--

CREATE TABLE IF NOT EXISTS `Component` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `sinature` int(11) DEFAULT NULL,
  `bimestre` char(1) DEFAULT NULL,
  `nrocomponent` int(2) DEFAULT NULL,
  `componente` varchar(200) DEFAULT NULL,
  `total_criterio` int(5) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `sinature` (`sinature`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3470 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Curso`
--

CREATE TABLE IF NOT EXISTS `Curso` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `curso` varchar(50) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `describeregistro`
--
CREATE TABLE IF NOT EXISTS `describeregistro` (
`codigo` int(11)
,`grado` varchar(20)
,`nombreseccion` varchar(25)
,`nomnivel` varchar(10)
,`paterno` varchar(25)
,`materno` varchar(25)
,`nombres` varchar(50)
,`dni` char(8)
,`CODEASINA` int(11)
,`asinatura` varchar(250)
,`I` varchar(8)
,`II` varchar(8)
,`III` varchar(8)
,`IV` varchar(8)
);
-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `descripcionareacurricular`
--
CREATE TABLE IF NOT EXISTS `descripcionareacurricular` (
`codigo` int(11)
,`curso` varchar(50)
,`nomnivel` varchar(10)
,`posicion_acta` int(2)
);
-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `descripcionseccion`
--
CREATE TABLE IF NOT EXISTS `descripcionseccion` (
`codigo` int(11)
,`ano_escolar` char(4)
,`nomnivel` varchar(10)
,`grado` varchar(20)
,`nombreseccion` varchar(25)
,`TUTOR` varchar(104)
,`AUXILIAR` varchar(104)
,`ASISTENCIAS` varchar(104)
,`PSICOLOGO` varchar(104)
);
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Docente`
--

CREATE TABLE IF NOT EXISTS `Docente` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `paterno` varchar(32) DEFAULT NULL,
  `materno` varchar(32) DEFAULT NULL,
  `nombres` varchar(150) DEFAULT NULL,
  `dni` char(8) DEFAULT NULL,
  `codigopersona` int(11) DEFAULT NULL,
  `tipoprofe` int(11) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `codigopersona` (`codigopersona`),
  KEY `tipoprofe` (`tipoprofe`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=281 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Grado`
--

CREATE TABLE IF NOT EXISTS `Grado` (
  `codigo` int(2) NOT NULL AUTO_INCREMENT,
  `grado` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Indicador`
--

CREATE TABLE IF NOT EXISTS `Indicador` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `idcomponente` int(11) DEFAULT NULL,
  `nro_criterio` int(11) DEFAULT NULL,
  `criterio` varchar(257) COLLATE utf8_unicode_ci DEFAULT NULL,
  `peso` int(3) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `idcomponente` (`idcomponente`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3871 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Nivel`
--

CREATE TABLE IF NOT EXISTS `Nivel` (
  `nivel` int(1) NOT NULL AUTO_INCREMENT,
  `nomnivel` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`nivel`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Persona`
--

CREATE TABLE IF NOT EXISTS `Persona` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `paterno` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `materno` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `nombres` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `dni` char(8) CHARACTER SET latin1 DEFAULT NULL,
  `sexo` char(1) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5008 ;

--
-- Disparadores `Persona`
--
DROP TRIGGER IF EXISTS `actualizate`;
DELIMITER //
CREATE TRIGGER `actualizate` AFTER UPDATE ON `Persona`
 FOR EACH ROW BEGIN

update Alumno set 
paterno=NEW.paterno,
materno=NEW.materno,
nombres=NEW.nombres,
dni=NEW.dni,
email=NEW.email
where idpersona=OLD.codigo;

update Docente set
paterno=NEW.paterno,
materno=New.materno,
nombres=New.nombres
where codigopersona=OLD.codigo;

END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_detallado`
--

CREATE TABLE IF NOT EXISTS `personal_detallado` (
  `codigo` int(11) DEFAULT NULL,
  `paterno` varchar(25) DEFAULT NULL,
  `materno` varchar(25) DEFAULT NULL,
  `nombres` varchar(50) DEFAULT NULL,
  `dni` char(8) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `area` varchar(50) DEFAULT NULL,
  `subarea` varchar(50) DEFAULT NULL,
  `cargo` varchar(50) DEFAULT NULL,
  `ingreso` date DEFAULT NULL,
  `nacimiento` date DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `direccion` varchar(250) DEFAULT NULL,
  `telefono` varchar(9) DEFAULT NULL,
  `celular` char(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Personal_Institucional`
--

CREATE TABLE IF NOT EXISTS `Personal_Institucional` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `paterno` varchar(25) DEFAULT NULL,
  `materno` varchar(25) DEFAULT NULL,
  `nombres` varchar(50) DEFAULT NULL,
  `dni` char(8) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `cargo` int(11) DEFAULT NULL,
  `ingreso` date DEFAULT NULL,
  `nacimiento` date DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `direccion` varchar(250) DEFAULT NULL,
  `telefono` varchar(9) DEFAULT NULL,
  `celular` char(9) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `cargo` (`cargo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=281 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Registro`
--

CREATE TABLE IF NOT EXISTS `Registro` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `codigoseccion` int(11) DEFAULT NULL,
  `codigodocente` int(11) DEFAULT NULL,
  `codigoasinatura` int(11) DEFAULT NULL,
  `activo1` int(1) NOT NULL,
  `activo2` int(1) NOT NULL,
  `activo3` int(1) NOT NULL,
  `activo4` int(1) NOT NULL,
  PRIMARY KEY (`codigo`),
  KEY `codigoseccion` (`codigoseccion`),
  KEY `codigodocente` (`codigodocente`),
  KEY `codigoasinatura` (`codigoasinatura`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=812 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `RegistroAnual`
--

CREATE TABLE IF NOT EXISTS `RegistroAnual` (
  `idalumnoregistro` varchar(25) NOT NULL,
  `idregistro` int(11) DEFAULT NULL,
  `idalumnoseccion` int(11) DEFAULT NULL,
  `p1` varchar(2) DEFAULT NULL,
  `p2` varchar(2) DEFAULT NULL,
  `p3` varchar(2) DEFAULT NULL,
  `p4` varchar(2) DEFAULT NULL,
  `anual` varchar(2) DEFAULT NULL,
  `exonerado` char(1) DEFAULT NULL,
  PRIMARY KEY (`idalumnoregistro`),
  KEY `idregistro` (`idregistro`),
  KEY `idalumnoseccion` (`idalumnoseccion`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Seccion`
--

CREATE TABLE IF NOT EXISTS `Seccion` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `ano_escolar` char(4) DEFAULT NULL,
  `cod_nivel` int(1) DEFAULT NULL,
  `cod_grado` int(2) DEFAULT NULL,
  `nombreseccion` varchar(25) DEFAULT NULL,
  `cod_tutor` int(11) DEFAULT NULL,
  `cod_auxiliar` int(11) DEFAULT NULL,
  `cod_registroasistencia` int(11) DEFAULT NULL,
  `cod_psicologo` int(11) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `cod_nivel` (`cod_nivel`),
  KEY `cod_grado` (`cod_grado`),
  KEY `cod_tutor` (`cod_tutor`),
  KEY `cod_auxiliar` (`cod_auxiliar`),
  KEY `cod_registroasistencia` (`cod_registroasistencia`),
  KEY `cod_psicologo` (`cod_psicologo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=358 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Subarea`
--

CREATE TABLE IF NOT EXISTS `Subarea` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `codigoarea` int(11) DEFAULT NULL,
  `subarea` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cod`),
  KEY `codigoarea` (`codigoarea`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TipoProfe`
--

CREATE TABLE IF NOT EXISTS `TipoProfe` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `User_history`
--

CREATE TABLE IF NOT EXISTS `User_history` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `accion` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9322 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario`
--

CREATE TABLE IF NOT EXISTS `Usuario` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(15) DEFAULT NULL,
  `contrasena` varchar(32) DEFAULT NULL,
  `idperfil` int(4) NOT NULL,
  `estado` varchar(100) DEFAULT NULL,
  `idpersona` int(11) DEFAULT NULL,
  `nivel` int(1) DEFAULT NULL,
  `inscripcion` date DEFAULT NULL,
  `ultimasesion` datetime DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `idpersona` (`idpersona`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2381 ;

--
-- Disparadores `Usuario`
--
DROP TRIGGER IF EXISTS `history_user`;
DELIMITER //
CREATE TRIGGER `history_user` AFTER UPDATE ON `Usuario`
 FOR EACH ROW BEGIN

insert into User_history
(accion,usuario,descripcion)
values(
CONCAT('INGRESO AL SISTEMA DEL USUARIO: ',OLD.usuario,' CON CODIGO: ',OLD.idpersona,' Y PASS: ',OLD.contrasena),
NEW.usuario,
NEW.ultimasesion
);

END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura para la vista `cargodetallado`
--
DROP TABLE IF EXISTS `cargodetallado`;

CREATE ALGORITHM=UNDEFINED DEFINER=`urp881`@`localhost` SQL SECURITY DEFINER VIEW `cargodetallado` AS select `c`.`codigo` AS `codigo`,`a`.`area` AS `area`,`sar`.`subarea` AS `subarea`,`c`.`cargo` AS `cargo` from ((`Cargo` `c` join `Subarea` `sar` on((`c`.`codigosubarea` = `sar`.`cod`))) join `Area` `a` on((`sar`.`codigoarea` = `a`.`codigo`)));

-- --------------------------------------------------------

--
-- Estructura para la vista `describeregistro`
--
DROP TABLE IF EXISTS `describeregistro`;

CREATE ALGORITHM=UNDEFINED DEFINER=`urp881`@`localhost` SQL SECURITY DEFINER VIEW `describeregistro` AS select `r`.`codigo` AS `codigo`,`se`.`grado` AS `grado`,`se`.`nombreseccion` AS `nombreseccion`,`se`.`nomnivel` AS `nomnivel`,`doc`.`paterno` AS `paterno`,`doc`.`materno` AS `materno`,`doc`.`nombres` AS `nombres`,`doc`.`dni` AS `dni`,`sina`.`codigo` AS `CODEASINA`,`sina`.`asinatura` AS `asinatura`,if((`r`.`activo1` = 0),'INACTIVO','ACTIVO') AS `I`,if((`r`.`activo2` = 0),'INACTIVO','ACTIVO') AS `II`,if((`r`.`activo3` = 0),'INACTIVO','ACTIVO') AS `III`,if((`r`.`activo4` = 0),'INACTIVO','ACTIVO') AS `IV` from (((`Registro` `r` join `descripcionseccion` `se` on((`r`.`codigoseccion` = `se`.`codigo`))) join `Personal_Institucional` `doc` on((`r`.`codigodocente` = `doc`.`codigo`))) join `Asinatura` `sina` on((`r`.`codigoasinatura` = `sina`.`codigo`)));

-- --------------------------------------------------------

--
-- Estructura para la vista `descripcionareacurricular`
--
DROP TABLE IF EXISTS `descripcionareacurricular`;

CREATE ALGORITHM=UNDEFINED DEFINER=`urp881`@`localhost` SQL SECURITY DEFINER VIEW `descripcionareacurricular` AS select `ac`.`codigo` AS `codigo`,`c`.`curso` AS `curso`,`n`.`nomnivel` AS `nomnivel`,`ac`.`posicion_acta` AS `posicion_acta` from ((`Area_Curricular` `ac` join `Curso` `c` on((`ac`.`nomarea` = `c`.`codigo`))) join `Nivel` `n` on((`ac`.`codigonivel` = `n`.`nivel`)));

-- --------------------------------------------------------

--
-- Estructura para la vista `descripcionseccion`
--
DROP TABLE IF EXISTS `descripcionseccion`;

CREATE ALGORITHM=UNDEFINED DEFINER=`urp881`@`localhost` SQL SECURITY DEFINER VIEW `descripcionseccion` AS select `s`.`codigo` AS `codigo`,`s`.`ano_escolar` AS `ano_escolar`,`n`.`nomnivel` AS `nomnivel`,`g`.`grado` AS `grado`,`s`.`nombreseccion` AS `nombreseccion`,concat(`p`.`paterno`,' ',`p`.`materno`,'  ,',`p`.`nombres`) AS `TUTOR`,concat(`au`.`paterno`,' ',`au`.`materno`,'  ,',`au`.`nombres`) AS `AUXILIAR`,concat(`ai`.`paterno`,' ',`ai`.`materno`,'  ,',`ai`.`nombres`) AS `ASISTENCIAS`,concat(`ps`.`paterno`,' ',`ps`.`materno`,'  ,',`ps`.`nombres`) AS `PSICOLOGO` from ((((((`Seccion` `s` join `Nivel` `n` on((`s`.`cod_nivel` = `n`.`nivel`))) join `Grado` `g` on((`s`.`cod_grado` = `g`.`codigo`))) join `Personal_Institucional` `p` on((`s`.`cod_tutor` = `p`.`codigo`))) join `Personal_Institucional` `au` on((`s`.`cod_auxiliar` = `au`.`codigo`))) join `Personal_Institucional` `ai` on((`s`.`cod_registroasistencia` = `ai`.`codigo`))) join `Personal_Institucional` `ps` on((`s`.`cod_psicologo` = `ps`.`codigo`)));

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
