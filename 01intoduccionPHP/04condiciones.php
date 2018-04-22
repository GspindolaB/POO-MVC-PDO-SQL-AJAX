<?php

//CONDICIONES

#if simple
$edad = 15;
$edad2 = 19;
$edad3 = 26;

if($edad < 18){
    echo 'Menor de edad'.'<br>';
}

#if-else
if($edad2 < 18){
    echo 'Menor de edad'.'<br>';
}else{
    echo 'Mayor de edad'.'<br>';
}

#if anidado
if($edad3 >= 65){
    echo 'Tercera edad'.'<br>'.'<br>';
}elseif($edad3 >= 18){
    echo 'Mayor de edad'.'<br>'.'<br>';
}else{
    echo 'Menor de edad'.'<br>'.'<br>';
}

#switch
$dia = 25;

switch($dia){
    case 1:
    echo 'Lunes';
    break;
    case 2:
    echo 'Martes';
    break;
    case 3:
    echo 'Miercoles';
    break;
    case 4:
    echo 'Jueves';
    break;
    case 5:
    echo 'Viernes';
    break;
    case 6:
    echo 'Sabado';
    break;
    case 7:
    echo 'Domingo';
    break;
    default:
    echo 'No existe';
}

?>