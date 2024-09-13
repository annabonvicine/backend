<?php

$valor = "banana";
//Cria uma array chamado $frutas contendo três elementos: "maça", "banana" e "laranja".
$frutas = array ("maça", "banana","laranja");

//Procura o valor "banana" no array $frutas e armazena o indice correspondente na variavrl $indice 
$indice = array_search("$valor", $frutas);

//verifica se $indice não é igual a false, oque significa que "banana" foi encontrada na array
if ($indice !== false){
//se "banana" foi encontrada, exibe a mensagem com o indice onde ela esta localizada 
    echo "$valor foi encontrada na posção: ".$indice;
}else{
    //se "banana" não foi encontrada, exibe a mensagem indicando isso 
    echo "$valor não foi encontrada na lista de frutas.";
}








?>