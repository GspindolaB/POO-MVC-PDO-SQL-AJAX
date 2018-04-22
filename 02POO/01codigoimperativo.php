<?php

//código imperativo o código estructurado.
$automovil1 = (object)["marca"=>"Nissan","modelo"=>"Versa"];
$automovil2 = (object)["marca"=>"Ford","modelo"=>"Expedition"];

function mostrar($automovil){
    echo "<h3>Voy a comprar un $automovil->marca, modelo $automovil->modelo</h3>".'<br>';
}

mostrar($automovil1);
mostrar($automovil2);

?>