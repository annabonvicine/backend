<?php

//exemplo com variavel numerico
$idade = 20;
$resultado = ($idade >= 18) ? "Maior de idade" : "Menor de idade";
echo $resultado; //saída: Maior de idade

echo "<br/>";

//aqui nesse bloco sera feito com um nome
$nome = "Anna";
$mensagem = ($nome == "Anna") ? "Olá, Anna!" : "Olá, visitante!";
echo $mensagem; //No site vai parecer "Olá, Anna!"

echo "<br/>";
//agora foi feito uma verificação com login
$is_logged_in = true;
$mensagem = $is_logged_in ? 'Bem-vindo de volta!' : 'Por favor, faça login!';
echo $mensagem;

echo "<br/>";

?>