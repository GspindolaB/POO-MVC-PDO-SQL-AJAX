<?php

#INDEX
//Se mostrara la salida de las vistas al usuario y a través de el se enviaran las distintas acciones
//que el usuario envie al controlador.
require_once 'controllers/controller.php';

$mvc = new MvcController();
$mvc->plantilla();

?>