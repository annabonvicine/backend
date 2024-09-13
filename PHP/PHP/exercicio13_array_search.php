<?php

$valor = "Anna";
//Cria uma array chamado $nome com $10 indices
$nome = array ("Anna", "Augusto","luís", "guilherme", "Maria", "Daniel", "Vinicius", "Enzo", "Felipe", "Pablo");


//Procura o valor "nome especifico" no array $nome e armazena o indice correspondente na variavrl $indice 
$indice = array_search("$valor", $nome);

//verifica se $indice não é igual a false, oque significa que o "nome especifico" foi encontrada na array
if ($indice !== false){
//se "nome especifico" foi encontrada, exibe a mensagem com o indice onde ela esta localizada 
    echo " O nome $valor foi encontrado no banco de dados, esta na posição: ".$indice;
}else{
    //se "nome especifico" não foi encontrada, exibe a mensagem indicando isso 
    echo "Este não foi encontrado o nome do cliente.";
}








?>