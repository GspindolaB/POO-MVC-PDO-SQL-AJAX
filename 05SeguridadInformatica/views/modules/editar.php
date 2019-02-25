<?php

session_start();
if(!$_SESSION['validar']){
	header('Location: index.php?action=ingresar');
	exit();//Se cierra el script despues de ejecutar el codigo
}

?>

<h1>EDITAR USUARIO</h1>

<form method="post"">
	
<?php

$editar = new MvcController();
$editar -> editarUsuarioController();
$editar -> actualizarUsuarioController();

?>

</form>