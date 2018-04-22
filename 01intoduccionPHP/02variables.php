<?php

//variable numerica
$numero= 7;
echo "El resultado es: $numero <br><br>";

//variable texto
$palabra = 'Esto es una variable de tipo texto';
echo $palabra .'<br><br>';

//variable booleana
$bool = true;
echo "Esto es una variable booleana y su valor es : $bool <br><br>";

//variable de tipo arreglo
$colores = array("rojo","amarillo");
echo $colores[1].'<br><br>';

//variables de tipo arreglo asociativo
$frutas = array("fruta1"=>"fresa","fruta2"=>"naranja","fruta3"=>"manzana");
echo "Esto es un arreglo asociativo $frutas[fruta2] <br><br>";

//variables de tipo objeto
$objeto = (object)["fruta1"=>"fresa","fruta2"=>"naranja","fruta3"=>"manzana"];
echo "Esto es una variable de tipo objeto $objeto->fruta1 <br><br>";

//la función var_dump nos ayuda a conocer el tipo de variable que estamos utilizando
var_dump($numero);
echo '<br>';
var_dump($palabra);
echo '<br>';
var_dump($bool);
echo '<br>';
var_dump($colores);
echo '<br>';
var_dump($frutas);
echo '<br>';
var_dump($objeto);

?>