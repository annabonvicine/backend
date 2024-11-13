<?php

require_once('class_Professor.php');

$professor1 = new Professor();

$professor1->nome = "Anna Lu";
// $professor1->$disciplina = "Backend";

$professor1->ensinar();
echo"<hr>";
$professor1->corrigirProva();
echo"<hr>";
$professor1->prepararAula();
echo"<hr>";
$professor1->simularFazerChamada();
echo"<hr>";
$professor1->simularCorrigirTarefa();
echo"<hr>";

?>