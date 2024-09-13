<?php

//cria uma array chamada $frutas contendo três eletemtos: "maça", "banana" e "laranja"
$frutas = array("maça", "banana", "laranja"); 

//declarei a fruta variavel
$fruta = "Abacaxi";


//verifica se "banana" está presente no array $frutas
if(in_array("$fruta", $frutas)){
// se banana esta na lista de frutas, exibe a mensagem "banana esta na lista de frutas"
echo "$fruta está na lista de frutas";
}else{
    // se banana não estiver na array, exibe a mensagem "banana não esta na lista de frutas"
    echo"$fruta não esta na lista de frutas";
}









?>