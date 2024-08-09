<?php
//aqui declarei as variaveis
$hora_extra=10;
$salario = 2000;
$bonus1 = 0.2;
$bonus2 = 0.1;

//aqui foi feito a conta do bonus 1
if ($salario >= 2000 && $hora_extra >5) {
    $bonus_total = $salario * $bonus2;
    echo " O bonus sera de $bonus_total";
}
//aqui foi a conta do bonus 2 usando o else if 
else if ( $salario < 2000 && $hora_extra > 10){
    $bonus_total2 = $salario * $bonus1;
    echo "O bonus sera de $bonus_total2";
}
// e aqui se nao tivesse bonus 
else {
    echo "O salario sera de $salario, sem bonus ";
}


?>