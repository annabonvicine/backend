<?php

//criando a Array lista_coisas
$lista_coisas = [];

//criando uma Array frutas, dentro da Array lista_coisas
$lista_coisas ['frutas'] = ['Banana', 'Maça', 'Morango', 'Uva'];

//criando uma Array pessoas, dentro da Array lista_coisas
$lista_coisas ['pessoas'] = ['João', 'José', 'Maria'];

echo '<pre>';
print_r($lista_coisas);
echo '</pre>';

//alterando o terceiro valor da array FRUTAS
$lista_coisas['frutas'][2] = 'Abacaxi';

//alterando o segundo valor da array PESSOAS 
$lista_coisas['pessoas'][1] = 'Carlos';
echo "<hr>";

echo "O terceiro valor da array FRUTAS agora é: ";
echo $lista_coisas['frutas'][2];

echo "<br>";

echo "O segundo valor da array PESSOAS agora é: ";
echo $lista_coisas['pessoas'][1];

echo '<pre>';
print_r($lista_coisas);
echo '</pre>';




?>