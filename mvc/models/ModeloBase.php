<?php
// Crear el modelo de la conexion al usuario

require_once 'config/database.php';

/**
 * 
 */
class ModeloBase{
	
	public $db;

	public function __construct(){
		$this->db = database::conectar();
	}

	//consultas generalesp
	public function MostrarTodos($tabla){
		$query = $this->db->query("SELECT * FROM $tabla");
		return $query;
	}


	public function Buscar($tabla, $id){
		$query = $this->db->query("SELECT * FROM " . $tabla . " WHERE id=$id");
		return $query;
  }

  	public function Eliminar($tabla, $id){
		$query = $this->db->query("DELETE FROM " . $tabla . " WHERE id=$id");
		return $query;
  }

}


?>