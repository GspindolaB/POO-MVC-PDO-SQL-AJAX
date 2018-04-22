<?php

//CICLOS

#while
$numero = 0;

while($numero < 10){
    $numero++;
    echo $numero;
}

echo '<br>';

$numero = 1;

while($numero <= 10){
    echo $numero;
    $numero++;
}

echo '<br>';

#do while
$n = 1;
do{
    echo $n;
    $n++;
}
while($n<=10);

echo '<br>';

#for
for($i = 1; $i<=10; $i++){
    echo $i;
}

?>