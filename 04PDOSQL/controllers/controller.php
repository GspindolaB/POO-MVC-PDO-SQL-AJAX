<?php

class MvcController{

	#LLAMADA A LA PLANTILLA
	#-------------------------------------

	public function pagina(){	
		
		include "views/template.php";
	
	}

	#ENLACES
	#-------------------------------------

	public function enlacesPaginasController(){

		if(isset( $_GET['action'])){
			
			$enlaces = $_GET['action'];
		
		}

		else{

			$enlaces = "index";
		}

		$respuesta = Paginas::enlacesPaginasModel($enlaces);

		include $respuesta;

	}

	#REGISTRO DE USUARIOS
	public function registroUsuarioController(){
		if(isset($_POST['usuarioRegistro'])){
			$tablaController = 'usuarios';
			$datosController = array('usuario' => $_POST['usuarioRegistro'],
					   			 'password' => $_POST['passwordRegistro'],
					   	         'email' => $_POST['emailRegistro']);
		
			$respuesta = Datos::registroUsuariosModel($datosController, $tablaController);
			if($respuesta == "success"){
				header('Location: index.php?action=ok');
			}else{
				header('Location: index.php');
			}
		}		
	}

	##IMGRESO DE USUARIOS
	public function ingresoUsuarioController(){
		if(isset($_POST['usuarioIngreso'])){
			$tablaController = 'usuarios';
			$datosController = array('usuario' => $_POST['usuarioIngreso'],
					   			 'password' => $_POST['passwordIngreso']);
		
			$respuesta = Datos::ingresoUsuariosModel($datosController, $tablaController);
			if($respuesta['usuario'] == $_POST['usuarioIngreso'] && $respuesta['password'] == $_POST['passwordIngreso']){

				session_start();//Se comienza una sesion
				$_SESSION['validar'] = true;
				header('Location: index.php?action=usuarios');
			}else{
				header('Location: index.php?action=fallo');
			}
		}
	}

	##VISTA DE USUARIOS
	public function vistaUsuarioController(){
		$tablaController = 'usuarios';
		$respuesta = Datos::vistaUsuariosModel($tablaController);

		foreach($respuesta as $fila => $item){
			echo '<tr>
		<td>'.$item['Usuario'].'</td>
		<td>'.$item['Password'].'</td>
		<td>'.$item['Email'].'</td>
		<td><a href="index.php?action=editar&id='.$item['Id'].'"><button>Editar</button></a></td>
		<td><a href="index.php?action=usuarios&idBorrar='.$item['Id'].'"><button>Borrar</button></a></td>
		</tr>';
		}
		
	}

	#EDITAR USUARIO
	public function editarUsuarioController(){
		$tablaController = 'usuarios';
		$datosController = $_GET['id'];
		$respuesta = Datos::editarUsuariosModel($datosController, $tablaController);

		echo '<input type="hidden" value="'.$respuesta['Id'].'" name="idEditar">
			<input type="text" value="'.$respuesta['Usuario'].'" name="usuarioEditar" required>
			<input type="text" value="'.$respuesta['Password'].'" name="passwordEditar" required>
			<input type="email" value="'.$respuesta['Email'].'" name="emailEditar" required>
			<input type="submit" value="Actualizar">';
	}

	#ACTUALIZAR USUARIO
	public function actualizarUsuarioController(){
		$tablaController = 'usuarios';
		if(isset($_POST['usuarioEditar'])){
			$datosController = array('id'=>$_POST['idEditar'],
									'usuario'=>$_POST['usuarioEditar'],
									'password'=>$_POST['passwordEditar'],
									'email'=>$_POST['emailEditar']);
		
		$respuesta = Datos::actualizarUsuariosModel($datosController, $tablaController);
			if($respuesta == "success"){
			header('Location: index.php?action=cambio');
			}else{
				echo "Error al actualizar los datos";
			}
		}
	}

	#ELIMINAR USUARIO
	public function eliminarUsuarioController(){
		$tablaController = 'usuarios';
		if(isset($_GET['idBorrar'])){
			$datosController = $_GET['idBorrar'];
			$respuesta = Datos::eliminarUsuariosModel($datosController, $tablaController);
			if($respuesta == "success"){
				header('Location: index.php?action=usuarios');
			}else{
				echo "El registro no pudo ser eliminado";
			}
		}
	}

}

?>