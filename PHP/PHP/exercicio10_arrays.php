<?php

$lista_num = array("1", "2", "3", "4","5","6","7","8","9","10");
echo '<pre>';
print_r ($lista_num);
echo $lista_num[0];//isso imprime o numero 1

echo "<br>"; //esses echo servem para colocar os numero que vai mudar (SO UMA INDICAÇÂO)
echo $lista_num[4];
echo "<br>";
echo $lista_num[9]; 
echo "<hr>";
echo '</pre>';

echo '<pre>';


//aqui vai alterar o meu item das posições necessarias
$lista_num[0] = "100";
$lista_num[4] = "500";
$lista_num[9] = "1000";
print_r ($lista_num);
echo '</pre>';

//e aqui indica o que mudou
echo $lista_num[0];
echo "<br>";
echo $lista_num[4];
echo "<br>";
echo $lista_num[9];
echo "<br>";

echo"<br>";






?>