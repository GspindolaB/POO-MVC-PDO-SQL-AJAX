<?php

session_start();
if(!$_SESSION['validar']){
	header('Location: index.php?action=ingresar');
	exit();//Se cierra el script despues de ejecutar el codigo
}

?>

<h1>USUARIOS</h1>
	<table border="1">		
		<thead>			
			<tr>
				<th>Usuario</th>
				<th>Contraseña</th>
				<th>Email</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>			
		<?php

		$uusarios = new MvcController();
		$uusarios -> vistaUsuarioController();
		$uusarios -> eliminarUsuarioController();

		?>
		</tbody>
	</table>
<?php

if(isset($_GET['action'])){
	if($_GET['action'] == 'cambio'){
		echo "Cambio realizado de manera correcta";
	}
}

?>