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
        $statement->close();//Cerrar la conexion
    }

    #INGRESO DE USUARIOS
    public function ingresoUsuariosModel($datosModel, $tablaModel){
        $statement = Conexion::conectar()->prepare("SELECT usuario, password, Intentos FROM $tablaModel
        WHERE usuario = :usuario AND password = :password");

        $statement->bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);
        $statement->bindParam(":password", $datosModel["password"], PDO::PARAM_STR);
        $statement->execute();
        //fetch(): Obtiene una fila de un conjunto de resultados asociado al objeto PDOStatement
        return $statement->fetch();
        $statement->close();//Cerrar la conexion
    }

    #INTENTOS DE USUARIOS
    public function intentosUsuariosModel($datosModel, $tablaModel){
        $statement = Conexion::conectar()->prepare("UPDATE $tablaModel SET Intentos=:Intentos
        WHERE usuario = :usuario");
        $statement->bindParam(":Intentos", $datosModel["actualizarIntentos"], PDO::PARAM_INT);
        $statement->bindParam(":usuario", $datosModel["usuarioActual"], PDO::PARAM_STR);

        if($statement->execute()){
            return "success";
        }else{
            return "error";
        }
        $statement->close();
    }

    #VISTA DE USUARIOS
    public function vistaUsuariosModel($tablaModel){
        $statement = Conexion::conectar()->prepare("SELECT * FROM $tablaModel");
        $statement->execute();
        //fetchAll(): Obtiene todas las filas de un conjunto de resultados
        return $statement->fetchAll();
        $statement->close();//Cerrar la conexion
    }

    #EDITAR USUARIOS
    public function editarUsuariosModel($datosModel, $tablaModel){
        $statement = Conexion::conectar()->prepare("SELECT * FROM $tablaModel WHERE Id = :Id");
        $statement->bindParam(":Id", $datosModel, PDO::PARAM_INT);
        $statement->execute();
        
        return $statement->fetch();
        $statement->close();
    }

    #ACTUALIZAR USUARIOS
    public function actualizarUsuariosModel($datosModel, $tablaModel){
        $statement = Conexion::conectar()->prepare("UPDATE $tablaModel SET Usuario=:Usuario,
        Password=:Password, Email=:Email WHERE Id = :Id");
        $statement->bindParam(":Usuario", $datosModel["usuario"], PDO::PARAM_STR);
        $statement->bindParam(":Password", $datosModel["password"], PDO::PARAM_STR);
        $statement->bindParam(":Email", $datosModel["email"], PDO::PARAM_STR);
        $statement->bindParam(":Id", $datosModel["id"], PDO::PARAM_INT);

        if($statement->execute()){
            return "success";
        }else{
            return "error";
        }
        $statement->close();
    }

    #ELIMINAR USUARIOS
    public function eliminarUsuariosModel($datosModel, $tablaModel){
        $statement = Conexion::conectar()->prepare("DELETE FROM $tablaModel WHERE Id=:Id");
        $statement->bindParam(":Id", $datosModel, PDO::PARAM_INT);

        if($statement->execute()){
            return "success";
        }else{
            return "error";
        }
        $statement->close();
    }

}