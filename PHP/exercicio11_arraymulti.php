<?php

$Cadastro = [];

//criando uma array pra usuario
$Cadastro ['usuario'] = ['Joao', 'Maria', 'Pedro'];

//criando uma Array senha dentro da array cadastro
$Cadastro ['senha'] = ['1234', 'abcd', '5678'];

echo '<pre>';
print_r($Cadastro);
echo '</pre>';

//alterando o 2 valor maria para ana
$Cadastro['usuario'][1] = 'Ana';

//alterando o segundo valor 
$Cadastro['senha'][1] = 'efgh';
echo "<hr>";

echo "O usuario Maria agora é: ";
echo $Cadastro['usuario'][1];

echo "<br>";

echo "A nova senha é: ";
echo $Cadastro['senha'][1];

echo '<pre>';
print_r($Cadastro);
echo '</pre>';





?>