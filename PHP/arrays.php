<?php

//aqui foi declarado a "lista"
$lista_frutas = array("Maça", "Morango", "Kiwi", "Uva","Laranja");
echo '<pre>';
print_r ($lista_frutas);
echo $lista_frutas[0]; //isso imprime morango pq começa 00,01,02
echo "<hr>";
echo '</pre>';

echo '<pre>';

//aqui vai alterar o meu item 0 -> Maça para Melancia
$lista_frutas[0] = "Melancia";
print_r ($lista_frutas);
echo '</pre>';

echo"<br>";
echo $lista_frutas[0];

?>