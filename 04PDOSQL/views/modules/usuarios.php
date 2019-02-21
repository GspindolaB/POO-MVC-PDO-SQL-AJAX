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

		?>
		</tbody>
	</table>
