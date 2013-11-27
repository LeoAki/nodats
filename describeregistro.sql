CREATE  VIEW `describeregistro` 
AS 
select 
`r`.`codigo` AS `codigo`,
`se`.`grado` AS `grado`,
`se`.`nombreseccion` AS `nombreseccion`,
`se`.`nomnivel` AS `nomnivel`,
`doc`.`paterno` AS `paterno`,
`doc`.`materno` AS `materno`,
`doc`.`nombres` AS `nombres`,
`doc`.`dni` AS `dni`,
`sina`.`codigo` AS `CODEASINA`,
`sina`.`asinatura` AS `asinatura`,
`r`.`codigodocente` AS `iddocente`,
if((`r`.`activo1` = 0),'INACTIVO',if((`r`.`activo1` = 1),'EN PROCESO','COMPLETO')) AS `I`,
if((`r`.`activo2` = 0),'INACTIVO',if((`r`.`activo2` = 1),'EN PROCESO','COMPLETO')) AS `II`,
if((`r`.`activo3` = 0),'INACTIVO',if((`r`.`activo3` = 1),'EN PROCESO','COMPLETO')) AS `III`,
if((`r`.`activo4` = 0),'INACTIVO',if((`r`.`activo4` = 1),'EN PROCESO','COMPLETO')) AS `IV`,
`se`.`codigo` AS `seccioncode`
from (((`Registro` `r` join `descripcionseccion` `se` 
	on((`r`.`codigoseccion` = `se`.`codigo`))) join `Personal_Institucional` `doc` 
	on((`r`.`codigodocente` = `doc`.`codigo`))) join `Asinatura` `sina` 
	on((`r`.`codigoasinatura` = `sina`.`codigo`))) 




CREATE  VIEW `describeregistro` 
AS 
select 
`r`.`codigo` AS `codigo`,
`se`.`grado` AS `grado`,
`se`.`nombreseccion` AS `nombreseccion`,
`se`.`nomnivel` AS `nomnivel`,
`doc`.`paterno` AS `paterno`,
`doc`.`materno` AS `materno`,
`doc`.`nombres` AS `nombres`,
`doc`.`dni` AS `dni`,
`sina`.`codigo` AS `CODEASINA`,
`sina`.`asinatura` AS `asinatura`,
`r`.`codigodocente` AS `iddocente`,
if((`r`.`activo1` = 0),'INACTIVO',if((`r`.`activo1` = 1),'EN PROCESO','COMPLETO')) AS `I`,
if((`r`.`activo2` = 0),'INACTIVO',if((`r`.`activo2` = 1),'EN PROCESO','COMPLETO')) AS `II`,
if((`r`.`activo3` = 0),'INACTIVO',if((`r`.`activo3` = 1),'EN PROCESO','COMPLETO')) AS `III`,
if((`r`.`activo4` = 0),'INACTIVO',if((`r`.`activo4` = 1),'EN PROCESO','COMPLETO')) AS `IV`,
`se`.`codigo` AS `seccioncode`
from (((`Registro` `r` join `descripcionseccion` `se` 
	on((`r`.`codigoseccion` = `se`.`codigo`))) join `Personal_Institucional` `doc` 
	on((`r`.`codigodocente` = `doc`.`codigo`))) join `Asinatura` `sina` 
	on((`r`.`codigoasinatura` = `sina`.`codigo`))) 
