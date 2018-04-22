<?php

#CLASE
//Una clase es un módelo que se utiliza para crear objetos que comparten un mismo comportamiento, un mismo estado y una misa identidad.
class Automovil{
    #PROPIEDADES
    //Son las caracteristicas que puede tener un objeto 

    public $marca;
    public $modelo;

    #METODO
    //Es el algoritmo asociado a un objeto e insica la capacidad de lo que puede hacer. Es decir una función que llevara a cabo ciertas tareas.
    //La diferencia entre un método y una función es que en la POO se conoce como método y en la programación estructurada como función.
    public function mostrar(){
        echo "<h3>Voy a comprar un $this->marca, modelo $this->modelo</h3>".'<br>';
    }
}

#OBJETO
//Una entidad provista de métodos o mensajes a los cuales responde propiedades con valores concretos

$a = new Automovil();
$a -> marca = 'Nissan';
$a -> modelo = 'Versa';
$a -> mostrar();

$b = new Automovil();
$b -> marca = 'Ford';
$b -> modelo = 'Expedition';
$b -> mostrar();

?>