<h1>REGISTRO DE USUARIO</h1>

<form method="post" onSubmit="return validarRegistro();">
	
	<label for="usuarioRegistro">Usuario:</label>
	<input type="text" placeholder="(Max 10 caracteres)" maxlength="10" name="usuarioRegistro" id="usuarioRegistro" required>

	<label for="passwordRegistro">Contraseña:</label>
	<input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="(Min 8 caracteres, incluir números y mayuscuña)" minlength="8" name="passwordRegistro" id="passwordRegistro" required>

	<label for="emailRegistro">Email:</label>
	<input type="email" placeholder="Escribe una dirección de correo electronico valida" name="emailRegistro" id="emailRegistro" required>

	<p style="text-align:center;"><input type="checkbox" name="terminos" id="terminos"><a href="#">Aceptar terminos y condiciones</a></p>

	<input type="submit" value="Enviar">

</form>

<?php

$registro = new MvcController();
$registro->registroUsuarioController();

if(isset($_GET['action'])){
	if($_GET['action'] == "ok"){
		echo "Registro Exitoso";
	}
}

?>