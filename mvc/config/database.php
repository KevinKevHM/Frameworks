<?php
//Conf para la BD

class database{
	
	public static function conectar()
	{

		$conexion = new mysqli("localhost", "root", "", "dbNombres");
		$conexion->query("SET NAME 'utf8'");
		return $conexion;
	}
}


?>