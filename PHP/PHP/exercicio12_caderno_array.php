<?php

//criando a array cadastro
$cadastro = [];
//criando uma array nome dentro da array cadastro
$cadastro['nome'] = ['Anna Luísa', 'Maria Clara','Augusto', 'Guilherme'];
//criando um array email dentro da array cadastro
$cadastro ['email'] = ['anna@gmail.com','maria@gmail.com','augusto@gmail.com','guilherme@gmail.com'];

//exibindo a array cadastro 
echo '<pre>';
print_r ($cadastro);
echo '</pre>';

//exibir indices
echo $cadastro['nome'][1]; 
echo '<br>';
echo $cadastro['email'][1];

//mudando o segundo indice para senai
$cadastro ['nome'][1] = 'SENAI';
$cadastro ['email'][1] = 'aluno@aluno.br';

echo '<pre>';
echo 'Os indices 2 foram mudados para SENAI e aluno@senai.br';
echo'<br>';
print_r ($cadastro);
echo '</pre>';

echo $cadastro['nome'][1]; 
echo '<br>';
echo $cadastro['email'][1];





?>