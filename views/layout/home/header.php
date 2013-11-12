<!DOCTYPE html>
<html lang="en">
	

<head>
    <title>SISNOTAS ::: <?= isset($this->titulo)?$this->titulo:''; ?></title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?= BASE_URL; ?>public/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= BASE_URL; ?>public/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="<?= BASE_URL; ?>public/css/fullcalendar.css" />
    <link rel="stylesheet" href="<?= BASE_URL; ?>public/css/unicorn.main.css" />
    <link rel="stylesheet" href="<?= BASE_URL; ?>public/css/unicorn.grey.css" class="skin-color" />
</head>
<body>
		
		
<div id="header">
    <h1><a href="<?= BASE_URL; ?>">Sistema de Notas :: SISNODATS</a></h1>
</div>
		
<div id="search">
    <input type="text" placeholder="buscar"/><button type="submit" class="tip-right" title="buscar"><i class="icon-search icon-white"></i></button>
</div>

<div id="user-nav" class="navbar navbar-inverse">
<ul class="nav btn-group">
    <li class="btn btn-inverse" ><a title="" href="#"><i class="icon icon-user"></i> <span class="text">Perfil</span></a></li>
    <li class="btn btn-inverse dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-bullhorn"></i> <span class="text">Alertas</span> <span class="label label-important">7</span> <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a class="sAdd" title="" href="#">Nuevos Alumnos <span class="label label-important">5</span></a></li>
            <li><a class="sInbox" title="" href="#">Nuevos Docentes <span class="label label-important">2</span></a></li>
        </ul>
    </li>
    <li class="btn btn-inverse"><a title="" href="index.php"><i class="icon icon-wrench"></i> <span class="text">Soporte</span></a></li>
    <li class="btn btn-inverse"><a title="" href="index.php"><i class="icon icon-share-alt"></i> <span class="text">Cerrar Sesión</span></a></li>
</ul>
</div>


<div id="sidebar">
    <a href="#" class="visible-phone"><i class="icon icon-home"></i>Panel Administrativo</a>
    <ul>
        <li class="active"><a href="<?= BASE_URL; ?>"><i class="icon icon-home"></i> <span>Panel Administrativo</span></a></li>
        <li class="submenu">
                <a href="#"><i class="icon icon-th-list"></i> <span>Alumnos</span> <span class="label">2</span></a>
                <ul>
                        <li><a href="<?= BASE_URL; ?>alumno/nuevo">Registrar</a></li>
                        <li><a href="<?= BASE_URL; ?>alumno/index">Consutar</a></li>
                </ul>
        </li>
        <li class="submenu">
                <a href="#"><i class="icon icon-th-list"></i> <span>Cursos</span> <span class="label">2</span></a>
                <ul>
                        <li><a href="<?= BASE_URL; ?>curso/nuevo">Registrar</a></li>
                        <li><a href="<?= BASE_URL; ?>curso/index">Consutar</a></li>
                </ul>
        </li>
        <li class="submenu">
                <a href="#"><i class="icon icon-th-list"></i> <span>Componente</span> <span class="label">2</span></a>
                <ul>
                        <li><a href="<?= BASE_URL; ?>componente/nuevo">Registrar</a></li>
                        <li><a href="<?= BASE_URL; ?>componente/index">Consutar</a></li>
                </ul>
        </li>
        <li><a href="<?= BASE_URL; ?>docente"><i class="icon icon-user"></i> <span>Docentes</span></a></li>
        <li class="submenu">
                <a href="#"><i class="icon icon-file"></i> <span>Consolidados</span> <span class="label">4</span></a>
                <ul>
                        <li><a href="invoice.php">Incial</a></li>
                        <li><a href="chat.php">Primaria</a></li>
                        <li><a href="calendar.php">Secundaria</a></li>
                </ul>
        </li>
        <li class="submenu">
                <a href="#"><i class="icon icon-book"></i> <span>Indicadores</span> <span class="label">3</span></a>
                <ul>
                        <li><a href="<?= BASE_URL; ?>indicador/inicial">Nivel-Inicial</a></li>
                        <li><a href="<?= BASE_URL; ?>indicador/primaria">Nivel-Primaria</a></li>
                        <li><a href="<?= BASE_URL; ?>indicador/secundaria">Nivel-Secundaria</a></li>
                </ul>
        </li>
    </ul>
</div>
<div id="content">
<div id="content-header">