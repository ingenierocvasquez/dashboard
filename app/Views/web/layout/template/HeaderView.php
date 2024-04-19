<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/favicon.ico">
<link rel="icon" type="image/png" href="./assets/img/favicon.ico">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title>ingenierocvasquez</title>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'/>

<!-- Librerias CSS -->
<!-- Web -->
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Source+Sans+Pro:400,600,700" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=League+Gothic&display=swap" rel="stylesheet">
<!-- Local -->
<link rel="stylesheet" href="<?= base_url('assets/web/css/main_web.css') ?>"/>
<link rel="stylesheet" href="<?= base_url().'assets/librerias/datatables/css/dataTables.bootstrap4.min.css' ?>"/>

</head>

<body>
<!--------------------------------------
NAVBAR
--------------------------------------->
<nav class="topnav navbar navbar-expand-lg navbar-light bg-white fixed-top">
<div class="container">
	<a class="navbar-brand" href="./index.html"><strong>ingenierocvasquez</strong></a>
	<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div class="navbar-collapse collapse" id="navbarColor02">
		<ul class="navbar-nav mr-auto d-flex align-items-center">
			<li class="nav-item">
			<a class="nav-link" href="<?= base_url() ?>">Inicio <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="<?= base_url('resumen') ?>">Resumen</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="">Proyectos</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="">Contáctame</a>
			</li>
			<!--<li class="nav-item">
			<a class="nav-link" href="">Health</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="">Collections</a>
			</li>            
			<li class="nav-item">
			<a class="nav-link" href="./about.html">About</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="./docs.html">Template <span class="badge badge-secondary">docs</span></a>
			</li>-->
		</ul>
		<ul class="navbar-nav ml-auto d-flex align-items-center">
			<li class="nav-item highlight">
			<a class="nav-link" href="<?= base_url('login') ?>">Iniciar Sesión</a>
			</li>
		</ul>
	</div>
</div>
</nav>
<!-- End Navbar -->
    
    
<!--------------------------------------
HEADER
--------------------------------------->