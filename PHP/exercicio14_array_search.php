<?php

//cria uma array multidimensional chmado $usuarios com subarrays que contem informaçoes de usuarios
$usuarios = [
    [ "id" => 1,
    "nome" => "João",
    "cidade" => "Cerquilho",
    "estado" => "SP"],

    [ "id" => 2,
      "nome" => "Maria",
      "cidade" => "Parati",
      "estado" => "RJ"],
    
    [ "id" => 3,
      "nome" => "Pedro",
      "cidade" => "Boituva",
      "estado" => "SP"],
    
    [ "id" => 4,
      "nome" => "Guilherme",
      "cidade" => "Itapetininga",
      "estado" => "SP"],

    
    [ "id" => 5,
      "nome" => "Felipe",
      "cidade" => "Florianopolis",
      "estado" => "SC"],
];

//define a variavel $busca com o valor que deseja procurar na array
$busca = "SP";

//Exibe a estrutura do array $usuarios de form,a legivel
echo '<pre>';
print_r($usuarios);
echo '</pre>';

//procura o valor armazenado na variavel $busca no array multidimensional $usuario, especificamente no campo 'nome'
$indice = array_search($busca, array_column($usuarios, 'estado'));
 
//verifica se $indice não é igual a false , o que significa que o valor em $busca foi encontrado no array
if($indice !== false){
    //se o valor em $busca foi encontrado , exibe o ID do usuario correspondente
    echo "$busca foi encontrado com o ID: ". $usuarios[$indice]['id'];
}else{
    //se o valor em $busca não foi encontrado , exibe uma mensagem indicando isso
    echo "$busca não foi encontrada na lista de usuarios.";
}

?>

