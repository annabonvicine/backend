<?php

require_once('class_Pessoa.php');

$pessoa1 = new Pessoa();

$pessoa1->nome = "Anna Lu";
$pessoa1->idade = 16;

$pessoa1->apresentar();
echo"<hr>";
$pessoa1->caminhar();
echo"<hr>";
$pessoa1->falar();
echo"<hr>";
$pessoa1->simularComendo();
echo"<hr>";
$pessoa1->simularDormindo();
echo"<hr>";

?>