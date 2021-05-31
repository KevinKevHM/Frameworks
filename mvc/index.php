<!DOCTYPE html>
<html>
<head>
	<title>Pagina MVC</title>
	<meta charset="utf-8">
	<meta name="viewoirt" content="width=device-width,user-scalable=no,initial-scale=1.0, maximum-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/js/bootstrap.min.js">
	<link rel="stylesheet" href="bootstrap/js/bootstrap.js">
</head>
<body>
	<h1>-Sitio web con MVC-</h1>
	<div class="container">
		<ul class="nav nav-tabs">
			<li class="active"><a href="index.php?controller=UsuarioController&action=mostrarTodos">Home</a></li>
			<li><a href="index.php?controller=UsuarioController&action=crear">Save</a></li>
			<li><a href="index.php?controller=UsuarioController&action=listarE">
			Delete</a></li>
			<li><a href="index.php?controller=UsuarioController&action=listar">Update</a></li>
		</ul>
	</div>

<?php 
	require_once 'controllers/UsuarioController.php';

	if(isset($_GET['controller'])){
		$nombrecontrolador = $_GET['controller'];
		$controlador = new $nombrecontrolador();
		if(isset($_GET['action'])){
			$action = $_GET['action'];
			$controlador->$action();
		}
	}
?>
</body>
</html>