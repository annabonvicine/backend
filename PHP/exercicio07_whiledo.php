<?php

$numero_max = 20; // aqui foi definido o numero maximo
$contador = 1;

do {
    if($contador % 2 != 0){ //Verificacao de numeros impares entre esse espaco
        echo "$contador </br>"; //impressao dos numeros impares
    }
    $contador++;   // pro contador percorrer ate o numero maximo
} 
while($contador <= $numero_max); //aqui foi feito a verificação pra ele nao ficar em um loop

?>