<h1>INGRESAR</h1>

	<form method="post" onSubmit="return validarIngreso();">
		
		<input type="text" placeholder="Usuario" name="usuarioIngreso" id="usuarioIngreso" maxlength="10" required>
		<label for="usuarioIngreso"></label>

		<input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Contraseña" minlength="8" name="passwordIngreso" id="passwordIngreso" required>
		<label for="passwordIngreso"></label>

		<input type="submit" value="Enviar">

	</form>

<?php

$ingreso = new MvcController();
$ingreso->ingresoUsuarioController();

if(isset($_GET['action'])){
	if($_GET['action'] == 'fallo'){
		echo "El usuario o password ingresado son incorrectos";
	}
}

?>