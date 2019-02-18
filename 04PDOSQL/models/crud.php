<?php

/**Extensión de Clases:
 * Los objetos pueden ser extendidos y también pueden heredar propiedades y métodos.
 * Para definir una clase como extensión  se debe definir una clase Padre y se utiliza una clase hija.
 * En este caso la clase padre es Conexion y la hija se llam Datos
 */

include_once 'conexion.php';

class Datos extends Conexion{
    ##REGISTRO DE UUSUARIOS
    public function registroUsuariosModel($datosModel, $tablaModel){
        $statement = Conexion::conectar()->prepare("INSERT INTO $tablaModel (Usuario, Password, Email) VALUES
        (:Usuario, :Password, :Email)");

        $statement->bindParam(":Usuario", $datosModel["usuario"], PDO::PARAM_STR);
        $statement->bindParam(":Password", $datosModel["password"], PDO::PARAM_STR);
        $statement->bindParam(":Email", $datosModel["email"], PDO::PARAM_STR);

        if($statement->execute()){
            return "success";
        }else{
            return "error";
        }
    }
}