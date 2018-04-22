<?php

//funciones sin parámetros
function saludo(){
    echo "Hola <br>";
}

saludo();

//funciones con parámetros
function sumar($num1, $num2){
    echo $num1 + $num2.'<br>';
}

sumar(10,5);

//funciones con return
function retorno($retornar){
    return $retornar;
}

echo retorno("Función con retorno")

?>