<?php

require_once('class_Coordenador.php');

$Coordenador1 = new Coordenador();

$Coordenador1->nome = "Anna Lu";
// $professor1->$disciplina = "Backend";

$Coordenador1->coordenarTurmas();
echo"<hr>";
$Coordenador1->planejarAulas();
echo"<hr>";
$Coordenador1->auxiliarProfessores();
echo"<hr>";
$Coordenador1->simularDefinirHorarios();
echo"<hr>";
$Coordenador1->simularOrganizarReunioes();
echo"<hr>";

?>