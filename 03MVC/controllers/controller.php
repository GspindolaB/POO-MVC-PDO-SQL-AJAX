<?php

class MvcController{

    //Llamad a la plantilla
    public function plantilla(){
        include 'views/template.php';
    }

    //Interacción del usuario
    public function enlacesPaginasController(){
        if(isset($_GET['action'])){   
        $enlacesController = $_GET['action'];
        }else{
            $enlacesController = 'index';
        }

        /*$respuesta = new EnlacesPaginas();
        $respuesta->enlacesPaginasModel();*/

        $respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);

        include $respuesta;
    }
}

?>