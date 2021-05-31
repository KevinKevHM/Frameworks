<?php
//Archivo controlador de usuaruio controller

class UsuarioController{
	
	public function crear(){
		require_once 'views/usuarios/crear.php';
		
	}
	public function guardar(){
		require_once 'models/Usuario.php';
		$user = new Usuario();
		$user->setNombre($_POST['txNombre']);
		$user->setApellido($_POST['txApellido']);
		$user->setEmail($_POST['txEmail']);
		$guardar = $user->Create();

	}
	public function mostrarTodos(){
		require_once 'models/Usuario.php';
		$user = new Usuario();
		$resultUser= $user->MostrarTodos('usuarios');
		require_once 'views/usuarios/mostrar.php';

	}
	public function buscar(){
		$id = $_REQUEST['id'];   
        require_once 'models/Usuario.php';
        $user = new Usuario();
        $resultUser = $user->Buscar('usuarios',$id);  
        require_once 'views/usuarios/modificar.php';
	}

	public function listar(){
        require_once 'models/Usuario.php';
        $user = new Usuario();
        $resultUser = $user->MostrarTodos('usuarios');
        require_once 'views/usuarios/listarModificar.php';
		//require_once 'views/usuarios/Eliminar.php';
      }

	  public function listarE(){
        require_once 'models/Usuario.php';
        $user = new Usuario();
        $resultUser = $user->MostrarTodos('usuarios');
        //require_once 'views/usuarios/listarModificar.php';
		require_once 'views/usuarios/Eliminar.php';
      }

	public function eliminar(){
        $id = $_REQUEST['id'];   
		require_once 'models/Usuario.php';
        $user = new Usuario();
        $resultUser = $user->Eliminar('usuarios',$id);
		//require_once 'models/ModeloBase';
		 
	}

	public function modificar(){
		require_once 'models/Usuario.php';
		$id = $_REQUEST['id'];
		echo "$id";
        $user = new Usuario();
        $user->setNombre($_POST['txNombre']);
        $user->setApellido($_POST['txApellido']);
        $user->setEmail($_POST['txEmail']);
        $actualizar = $user->Update($id);
		
		

	}
       

}

?>