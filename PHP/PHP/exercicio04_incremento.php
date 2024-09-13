<?php

// aqui nos chamamos o laço de repetição do 1 ao 10
for ($i = 1; $i <=10; $i++){

//aqui indicamos a categoria dos numeros, por exemplo: do numero 1 ao 3 é categoria baixo
//condicional switch com booleano 
switch (true){
    case( $i >= 1 && $i <= 3) :
        $categoria = "baixo";
        break;

    case ( $i >= 4 && $i <= 7):
        $categoria = "médio";
        break;
    
    case ( $i >= 8 && $i <= 10):
        $categoria = "alto";
        break;
 }
//condição para saber se o numero é par ou impar
 $par = ($i % 2 == 0)? "par":"ímpar";

 echo "O número $i é $par e esta na categoria $categoria. <br>";

 /*e aqui le o codigo para o site, na saida ficara assim:
 O número 1 é ímpar e esta na categoria baixo.
O número 2 é par e esta na categoria baixo.
O número 3 é ímpar e esta na categoria baixo.
O número 4 é par e esta na categoria médio.
O número 5 é ímpar e esta na categoria médio.
O número 6 é par e esta na categoria médio.
O número 7 é ímpar e esta na categoria médio.
O número 8 é par e esta na categoria alto.
O número 9 é ímpar e esta na categoria alto.
O número 10 é par e esta na categoria alto.
*/
 
}




?>