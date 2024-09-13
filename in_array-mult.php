<?php

//cria uma array multidimensional chmado $usuarios com subarrays que contem informaçoes de usuarios
$usuarios = [
    [ "id" => 1,
    "nome" => "João",
    "email" => "joão@example.com"],

    [ "id" => 2,
      "nome" => "Maria",
      "email" => "maria@example.com"],
    
    [ "id" => 3,
      "nome" => "Pedro",
      "email" => "pedro@example.com"]
];

//define a variavel $busca com o valor que deseja procurar na array
$busca = "pedro@example.com";

//Exibe a estrutura do array $usuarios de form,a legivel
echo '<pre>';
print_r($usuarios);
echo '</pre>';

//procura o valor armazenado na variavel $busca no array multidimensional $usuario, especificamente no campo 'nome'
$indice = array_search($busca, array_column($usuarios, 'email'));
 
//verifica se $indice não é igual a false , o que significa que o valor em $busca foi encontrado no array
if($indice !== false){
    //se o valor em $busca foi encontrado , exibe o ID do usuario correspondente
    echo "$busca foi encontrado com o ID: ". $usuarios[$indice]['id'];
}else{
    //se o valor em $busca não foi encontrado , exibe uma mensagem indicando isso
    echo "$busca não foi encontrada na lista de usuarios.";
}





?>