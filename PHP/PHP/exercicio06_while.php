<?php

 $numero_usuario = -7; //numero que o usuario determinou
 $contador = 1; //faz a contagem desde dele até o numero determinado "numero_usuario"

 if ($numero_usuario > 0){ //verificacao se o numero é positivo 
    while ($contador <= $numero_usuario){ //enquanto contagem for menor ou igual que o numero do usuario 
        if($contador % 2 == 0){ //Verificacao de numeros pares entre esse espaco
            echo "$contador </br>"; //impressao dos numeros pares 
        }
        $contador++; // soma mais 1 no contador para ele "percorrer" todos os numeros
    }
 }
else{
    echo 'Este numero não é positivo!'; // alerta caso o numero do usuario n seja positivo
}
?>