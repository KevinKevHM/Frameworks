<?php
//Crear el modelo del usuario
require_once 'ModeloBase.php';

class Usuario extends ModeloBase{
	public $id;	
	public $nombre;
	public $apellido;
	public $email;

	public function __construct(){
		parent::__construct();

	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}


	public function getNombre($nombre){
		return $this->nombre;
	}

	public function setApellido($apellido){
		$this->apellido = $apellido;
	}


	public function getApellido($apellido){
		return $this->apellido;
	}

	public function setEmail($email){
		$this->email = $email;
	}


	public function getEmail($email){
		return $this->email;
	}

	public function Create(){
		$sql = "INSERT INTO usuarios(nombre,apellido,email) VALUES
		('{$this->nombre}','{$this->apellido}','{$this->email}')";
		$guardado = $this->db->query($sql);

		return $guardado;
	}

	public function Update($id){
		$sql = "UPDATE usuarios SET nombre='{$this->nombre}', apellido='{$this->apellido}', email='{$this->email}'
		 WHERE id=$id";    
		$modificado = $this->db->query($sql);
		return $modificado;
	  }
	  
	 
 

}
?>