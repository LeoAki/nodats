<!DOCTYPE html>
<html lang="en">
	

<head>
		<title>Unicorn Admin</title>
		<meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
		<link rel="stylesheet" href="css/fullcalendar.css" />	
		<link rel="stylesheet" href="css/unicorn.main.css" />
		<link rel="stylesheet" href="css/unicorn.grey.css" class="skin-color" />
	</head>
	<body>
		
		
		<div id="header">
			<h1><a href="dashboard.html">Universidad Virtual</a></h1>		
		</div>
		
		<div id="search">
			<input type="text" placeholder="buscar aqui..."/><button type="submit" class="tip-right" title="buscar"><i class="icon-search icon-white"></i></button>
		</div>
		<div id="user-nav" class="navbar navbar-inverse">
            <ul class="nav btn-group">
                <li class="btn btn-inverse" ><a title="" href="#"><i class="icon icon-user"></i> <span class="text">Perfil</span></a></li>
                <li class="btn btn-inverse dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Mensajes</span> <span class="label label-important">5</span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a class="sAdd" title="" href="#">nuevo mensaje</a></li>
                        <li><a class="sInbox" title="" href="#">inbox</a></li>
                        <li><a class="sOutbox" title="" href="#">outbox</a></li>
                        <li><a class="sTrash" title="" href="#">trash</a></li>
                    </ul>
                </li>
                <li class="btn btn-inverse"><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Configuración</span></a></li>
                <li class="btn btn-inverse"><a title="" href="index.php"><i class="icon icon-share-alt"></i> <span class="text">Salir</span></a></li>
            </ul>
        </div>
            
		<div id="sidebar">
			<a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
			<ul>
				<li class="active"><a href="panel.php"><i class="icon icon-home"></i> <span>Dashboard</span></a></li>
				<li class="submenu">
					<a href="#"><i class="icon icon-th-list"></i> <span>Formularios</span> <span class="label">3</span></a>
					<ul>
						<li><a href="form-common.php">Elementos comunes</a></li>
						<li><a href="form-validation.php">Validaciones</a></li>
						<li><a href="form-wizard.php">Asistentes</a></li>
					</ul>
				</li>
				<li><a href="buttons.php"><i class="icon icon-tint"></i> <span>Butones &amp; iconos</span></a></li>
				<li><a href="interface.php"><i class="icon icon-pencil"></i> <span>Interfaces</span></a></li>
				<li><a href="tables.php"><i class="icon icon-th"></i> <span>Tablas</span></a></li>
				<li><a href="grid.php"><i class="icon icon-th-list"></i> <span>Grillas </span></a></li>
				<li class="submenu"> 
					<a href="#"><i class="icon icon-file"></i> <span>Ejemplos</span> <span class="label">4</span></a>
					<ul>
						<li><a href="invoice.php">Invoice</a></li>
						<li><a href="chat.php">Chat</a></li>
						<li><a href="calendar.php">Calendario</a></li>
						<li><a href="gallery.php">Galeria</a></li>
					</ul>
				</li>
				<li>
					<a href="charts.php"><i class="icon icon-signal"></i> <span>Graficos</span></a>
				</li>
				<li>
					<a href="widgets.php"><i class="icon icon-inbox"></i> <span>Widgets</span></a>
				</li>
			</ul>
		
		</div>
