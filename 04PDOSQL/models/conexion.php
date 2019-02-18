<?php

class Conexion{
    public function conectar(){
        $conexion = new PDO("mysql:host=localhost;dbname=curso_pdo","root","");
        return $conexion;
    }
}