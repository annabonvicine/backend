<?php

echo"<pre>";
print_r($_POST);
echo "</pre>";

echo "<hr>";

$titulo = $_POST['titulo'];
$categoria = $_POST['categoria'];
$descricao = $_POST['descricao'];

$texto = $titulo. '#' .$categoria. '#' .$descricao.PHP_EOL;

echo $texto;

$arquivo = fopen('registro.txt', 'a');

fwrite($arquivo, '$texto');

fclose($arquivo);  
?>